<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check honeypot fields - if any contain data, it's likely a bot
    if (!empty($_POST['website']) || !empty($_POST['phone']) || !empty($_POST['company'])) {
        // Silently exit for spam submissions
        exit;
    }
    
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $message = $_POST['your-message'];
    
    $to = "info@globalrepairgeek.com";
    $subject = "New Contact Form Submission from " . $name;
    
    $email_content = "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n\n";
    $email_content .= "Message:\n" . $message . "\n";
    
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    $success = mail($to, $subject, $email_content, $headers);
    
    // Set session variable for message display
    session_start();
    $_SESSION['form_submitted'] = true;
    $_SESSION['mail_success'] = $success;
    
    // Redirect to prevent form resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php include "includes/head.php" ?>
	<title>Contact Us | L&A LLC in London </title>
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
              <h1 style="font-size: 44px;color: #ffffff;text-align: center" class="vc_custom_heading section-heading" > Contact</h1>
              </div>
              </div>
              </div>
              </div>
              <div class="vc_row wpb_row vc_row-fluid vc_custom_1475845210364 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="vc_row wpb_row vc_inner vc_row-fluid container vc_custom_1475845870743">
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                          <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                              <div class="key-icon-box icon-circle icon-left   "  >
                                <div class="tt-iconbox-customimg img_small_size">
                                  <img width="60" height="60" src="https://www.keydesign-themes.com/incubator/wp-content/uploads/2016/01/ico2.png" class="attachment-full" alt="" />
                                  </div>
                                  <h4 class="service-heading" >OUR OFFICES</h4>
                                  <p >108 Ash st NE New London MN 56273</p>
                                  <!-- <p class="ib-link"><a href="">VIEW LOCATION</a></p> -->
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                                  <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner">
                                      <div class="wpb_wrapper">
                                        <div class="key-icon-box icon-circle icon-left   "  >
                                          <div class="tt-iconbox-customimg img_small_size">
                                            <img width="60" height="60" src="https://www.keydesign-themes.com/incubator/wp-content/uploads/2016/01/ico1.png" class="attachment-full" alt="" />
                                            </div>
                                            <h4 class="service-heading" >Email</h4>
                                            <p >larrydabdulm@gmail.com
                                            <br>
                                            info@globalrepairgeek.com</p>
                                            <!-- <p class="ib-link"><a href=""><span class="__cf_email__" data-cfemail="5c3f3332283d3f281c37392538392f353b327128343931392f723f3331">[email&#160;protected]</span></a>
                                              </p> -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner">
                                      <div class="wpb_wrapper">
                                        <div class="key-icon-box icon-circle icon-left   "  >
                                          <div class="tt-iconbox-customimg img_small_size">
                                            <img width="60" height="60" src="https://www.keydesign-themes.com/incubator/wp-content/uploads/2016/01/ico3.png" class="attachment-full" alt="" />
                                            </div>
                                            <h4 class="service-heading" >CALL US NOW</h4>
                                            <p >1-334-557-0315</p>
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <h2 style="text-align: center" class="vc_custom_heading section-heading vc_custom_1475848393354">
                                        Drop us a line</h2>
                                    <div role="form" class="wpcf7" id="wpcf7-f323-p3427-o1" lang="en-US" dir="ltr">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="wpcf7-form">
                                            <!-- Honeypot fields - hidden from regular users -->
                                            <div style="display:none !important;">
                                                <input type="text" name="website" autocomplete="off" />
                                                <input type="text" name="phone" autocomplete="off" />
                                                <input type="text" name="company" autocomplete="off" />
                                            </div>
                                            
                                            <p>
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="YOUR NAME" required />
                                                </span><br />
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="YOUR EMAIL" required />
                                                </span><br />
                                                <span class="wpcf7-form-control-wrap your-message">
                                                    <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="THE MESSAGE" required></textarea>
                                                </span><br />
                                                <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-12" style="margin-bottom:-40px">
            <iframe src="https://www.google.com/maps/embed?pb=" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
       
            </div>
                         </div></div></section>

	<?php include "includes/footer.php" ?>

	<!-- Response Modal -->
	<div class="modal fade" id="responseModal" tabindex="-1" role="dialog" aria-labelledby="responseModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="responseModalLabel">Message Status</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div id="successMessage" style="display:none;">
							<i class="fas fa-check-circle text-success" style="font-size: 48px;"></i>
							<h4 class="mt-3">Thank You!</h4>
							<p>We have received your message and will get back to you soon.</p>
						</div>
						<div id="errorMessage" style="display:none;">
							<i class="fas fa-times-circle text-danger" style="font-size: 48px;"></i>
							<h4 class="mt-3">Oops!</h4>
							<p>Sorry, there was an error sending your message. Please try again later.</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Add this JavaScript code -->
	<script>
	<?php
	session_start();
	if (isset($_SESSION['form_submitted'])) {
		if ($_SESSION['mail_success']) {
			echo '
			$(document).ready(function() {
				$("#successMessage").show();
				$("#errorMessage").hide();
				$("#responseModal").modal("show");
			});';
		} else {
			echo '
			$(document).ready(function() {
				$("#successMessage").hide();
				$("#errorMessage").show();
				$("#responseModal").modal("show");
			});';
		}
		// Clear the session variables
		unset($_SESSION['form_submitted']);
		unset($_SESSION['mail_success']);
	}
	?>
	</script>
</body>
</html>