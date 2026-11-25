<?php
/**
 * Handles the "Buy now" form on pricing-mail.php.
 * Sends the order details to the business inbox with PHPMailer, then
 * redirects back to the form with ?order=sent|invalid|failed.
 *
 * SMTP credentials are read from the .env file in the site root
 * (see .env.example). If SMTP_HOST is empty, PHP's mail() is used instead.
 */

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/includes/PHPMailer/Exception.php';
require __DIR__ . '/includes/PHPMailer/PHPMailer.php';
require __DIR__ . '/includes/PHPMailer/SMTP.php';

/** Read KEY=value pairs from a .env file. */
function load_env(string $path): array
{
    $values = [];
    if (!is_readable($path)) {
        return $values;
    }
    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#' || strpos($line, '=') === false) {
            continue;
        }
        [$key, $value] = explode('=', $line, 2);
        $value = trim($value);
        // Strip matching quotes: KEY="value" or KEY='value'
        if (strlen($value) >= 2 && ($value[0] === '"' || $value[0] === "'") && substr($value, -1) === $value[0]) {
            $value = substr($value, 1, -1);
        }
        $values[trim($key)] = $value;
    }
    return $values;
}

/** Trim a posted field, drop line breaks and cap its length. */
function field(string $name, int $maxLength): string
{
    $value = isset($_POST[$name]) && is_string($_POST[$name]) ? $_POST[$name] : '';
    $value = trim(preg_replace('/[\r\n\t]+/', ' ', $value));
    return function_exists('mb_substr') ? mb_substr($value, 0, $maxLength) : substr($value, 0, $maxLength);
}

function back_to_form(int $amount, string $status): void
{
    header('Location: pricing-mail.php?amount=' . $amount . '&order=' . $status . '#order-form', true, 303);
    exit;
}

$allowedAmounts = [100, 150, 200, 250, 300, 350, 400, 500];
$amount = isset($_POST['amount']) ? (int) preg_replace('/\D+/', '', (string) $_POST['amount']) : 0;
if (!in_array($amount, $allowedAmounts, true)) {
    $amount = 100;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: pricing-mail.php', true, 303);
    exit;
}

// Honeypot: real visitors never see this field, so pretend it worked and send nothing.
if (!empty($_POST['website'])) {
    back_to_form($amount, 'sent');
}

$name           = field('name', 120);
$email          = field('mail', 160);
$phone          = field('number', 40);
$address        = field('address', 250);
$billingAddress = field('address1', 250);

if ($name === '' || $phone === '' || $address === '' || $billingAddress === ''
    || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    back_to_form($amount, 'invalid');
}

$env      = load_env(__DIR__ . '/.env');
$mailTo   = !empty($env['MAIL_TO']) ? $env['MAIL_TO'] : 'info@globalrepairgeek.com';
$mailFrom = !empty($env['MAIL_FROM']) ? $env['MAIL_FROM'] : 'info@globalrepairgeek.com';
$fromName = !empty($env['MAIL_FROM_NAME']) ? $env['MAIL_FROM_NAME'] : 'L&A LLC Website';

$rows = [
    'Amount'          => '$' . $amount,
    'Name'            => $name,
    'Email'           => $email,
    'Phone'           => $phone,
    'Address'         => $address,
    'Billing address' => $billingAddress,
    'Submitted'       => date('Y-m-d H:i:s T'),
];

$html = '<h2 style="font-family:Arial,sans-serif;color:#0b1f33;">New computer services order</h2>'
      . '<table cellpadding="8" cellspacing="0" style="border-collapse:collapse;font-family:Arial,sans-serif;font-size:14px;">';
$text = "New computer services order\n\n";
foreach ($rows as $label => $value) {
    $html .= '<tr><td style="border:1px solid #dce6ee;background:#f4f8fb;"><strong>' . $label . '</strong></td>'
           . '<td style="border:1px solid #dce6ee;">' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '</td></tr>';
    $text .= $label . ': ' . $value . "\n";
}
$html .= '</table>';

$mail = new PHPMailer(true);

try {
    if (!empty($env['SMTP_HOST'])) {
        $mail->isSMTP();
        $mail->Host     = $env['SMTP_HOST'];
        $mail->Port     = !empty($env['SMTP_PORT']) ? (int) $env['SMTP_PORT'] : 587;
        $mail->SMTPAuth = !empty($env['SMTP_USERNAME']);
        $mail->Username = $env['SMTP_USERNAME'] ?? '';
        $mail->Password = $env['SMTP_PASSWORD'] ?? '';

        $encryption = strtolower($env['SMTP_ENCRYPTION'] ?? 'tls');
        if ($encryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($encryption === 'none') {
            $mail->SMTPSecure  = '';
            $mail->SMTPAutoTLS = false;
        } else {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }
    } else {
        $mail->isMail();
    }

    $mail->CharSet = 'UTF-8';
    $mail->setFrom($mailFrom, $fromName);
    $mail->addAddress($mailTo);
    $mail->addReplyTo($email, $name);
    $mail->isHTML(true);
    $mail->Subject = 'New order: $' . $amount . ' computer services - ' . $name;
    $mail->Body    = $html;
    $mail->AltBody = $text;
    $mail->send();
} catch (Exception $e) {
    error_log('Order email failed: ' . $mail->ErrorInfo);
    back_to_form($amount, 'failed');
}

back_to_form($amount, 'sent');
