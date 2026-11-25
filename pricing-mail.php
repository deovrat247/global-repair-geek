<?php
// Amount chosen from the "Computer Services" price menu (defaults to $100).
$allowedAmounts = [100, 150, 200, 250, 300, 350, 400, 500];
$selectedAmount = isset($_GET['amount']) ? (int) $_GET['amount'] : 100;
if (!in_array($selectedAmount, $allowedAmounts, true)) {
    $selectedAmount = 100;
}
// Result of the last form submission (set by mail.php).
$orderStatus = isset($_GET['order']) ? $_GET['order'] : '';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php include "includes/head.php" ?>
	<title>Computer Services Pricing | L&amp;A LLC</title>
<meta name="description" content="">



</head>
<body>
	
	<?php include "includes/menu.php" ?>

<section id="single-page" class="section no-header-image about-us" style="padding-top: 86px;">
	<div class="container fullwidth">
		<div class="row single-page-content">
			<div data-vc-parallax="1.5" data-vc-parallax-o-fade="on" data-vc-parallax-image="assets/images/banner-img-l-a-llc.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1475851762255 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving-fade js-vc_parallax-o-fade" style="background-size: cover;background-repeat: no-repeat;position: center center;background-position: center;">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<h1 style="font-size: 44px;color: #ffffff;text-align: center" class="vc_custom_heading section-heading" >Computer Services Pricing</h1>
						</div>
					</div>
				</div>
			</div>

			<div class="checkout-modern">
				<div class="container checkout-grid">
					<aside class="checkout-summary" aria-label="Order summary">
						<span class="eyebrow eyebrow-light">Computer services</span>
						<h2>Your selected amount</h2>
						<div class="checkout-amount">
							<span>Total</span>
							<strong>$<?php echo $selectedAmount; ?></strong>
						</div>

						<p class="checkout-label">Change amount</p>
						<div class="checkout-chips">
							<?php foreach ($allowedAmounts as $amount): ?>
							<a class="checkout-chip<?php echo $amount === $selectedAmount ? ' is-active' : ''; ?>" href="pricing-mail.php?amount=<?php echo $amount; ?>"<?php echo $amount === $selectedAmount ? ' aria-current="true"' : ''; ?>>$<?php echo $amount; ?></a>
							<?php endforeach; ?>
						</div>

						<div class="checkout-help">
							<p>Questions before you buy?</p>
							<a href="tel:+13202476747">1-320-247-6747</a>
							<a href="mailto:info@globalrepairgeek.com">info@globalrepairgeek.com</a>
						</div>
						<a class="checkout-policy" href="refund-policy.php">Read our refund policy</a>
					</aside>

					<form class="checkout-form" id="order-form" method="post" action="mail.php">
						<input type="hidden" name="amount" value="<?php echo $selectedAmount; ?>">

						<?php if ($orderStatus === 'sent'): ?>
						<div class="checkout-notice is-success" role="status">
							<strong>Thank you — your order request has been sent.</strong>
							We’ll contact you shortly to confirm the details and arrange payment.
						</div>
						<?php elseif ($orderStatus === 'invalid'): ?>
						<div class="checkout-notice is-error" role="alert">
							<strong>Please check your details.</strong>
							Every field is required and the email address must be valid.
						</div>
						<?php elseif ($orderStatus === 'failed'): ?>
						<div class="checkout-notice is-error" role="alert">
							<strong>Sorry, we couldn’t send your request.</strong>
							Please try again, or call us on <a href="tel:+13202476747">1-320-247-6747</a>.
						</div>
						<?php endif; ?>

						<h2>Buy now</h2>
						<p class="checkout-intro">Fill in your details and we’ll contact you to confirm your order and arrange payment.</p>

						<fieldset>
							<legend><span>1</span> Your details</legend>
							<div class="checkout-fields">
								<div class="checkout-field checkout-field-wide">
									<label for="co-name">Full name</label>
									<input type="text" id="co-name" name="name" autocomplete="name" maxlength="120" required>
								</div>
								<div class="checkout-field">
									<label for="co-mail">Email</label>
									<input type="email" id="co-mail" name="mail" autocomplete="email" maxlength="160" required>
								</div>
								<div class="checkout-field">
									<label for="co-number">Phone number</label>
									<input type="tel" id="co-number" name="number" autocomplete="tel" maxlength="40" required>
								</div>
							</div>
						</fieldset>

						<fieldset>
							<legend><span>2</span> Address</legend>
							<div class="checkout-fields">
								<div class="checkout-field checkout-field-wide">
									<label for="co-address">Address</label>
									<input type="text" id="co-address" name="address" autocomplete="street-address" maxlength="250" required>
								</div>
								<div class="checkout-field checkout-field-wide">
									<label for="co-address1">Billing address</label>
									<input type="text" id="co-address1" name="address1" maxlength="250" required>
								</div>
							</div>
						</fieldset>

						<!-- Honeypot: hidden from people, bots tend to fill it in. -->
						<div class="checkout-hp" aria-hidden="true">
							<label for="co-website">Leave this field empty</label>
							<input type="text" id="co-website" name="website" tabindex="-1" autocomplete="off">
						</div>

						<button type="submit" name="submit" value="1" class="button button-accent checkout-submit">Place order · $<?php echo $selectedAmount; ?></button>
					</form>
				</div>
			</div>
		</div>
	</div>

	</section>		               	
	<?php include "includes/footer.php" ?>
</body>
</html>