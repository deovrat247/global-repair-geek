<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php include "includes/head.php" ?>
	<title>Pricing | L&A LLC in London</title>
<meta name="description" content="">


<style>
    * {
    box-sizing: border-box;
}


h2 {
    text-align: center;
    margin-bottom: 50px;
    color: #fff;
}



/* form starting stylings ------------------------------- */
.group {
    position: relative;
    margin-bottom: 35px;
}

input {
    font-size: 18px;
    padding: 5px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
}

    input:focus {
        outline: none;
    }

/* LABEL ======================================= */
label {
    color: #fff;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label {
    top: -20px;
    font-size: 14px;
    color: #fff;
}

/* BOTTOM BARS ================================= */
.bar {
    position: relative;
    display: block;
    width: 100%;
}

    .bar:before, .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #fff;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }



/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
    width: 50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}

/* active state */
input:focus ~ .highlight {
    -webkit-animation: inputHighlighter 0.3s ease;
    -moz-animation: inputHighlighter 0.3s ease;
    animation: inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}

@-moz-keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}

@keyframes inputHighlighter {
    from {
        background: #fff;
    }

    to {
        width: 0;
        background: transparent;
    }
}


#panel {
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
    background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Firefox 3.6 to 15 */
    background: linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* Standard syntax (must be last) */
    
    
    border-radius: 4px;

}

</style>
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
							<h1 style="font-size: 44px;color: #ffffff;text-align: center" class="vc_custom_heading section-heading" >Pricing</h1>
						</div>
					</div>
				</div>
			</div><br><br>
			
<!--			<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->


<div class="container">


    <div class="col-lg-offset-2 col-lg-8  col-xs-12" id="panel">
        <center><h2>Buy Now</h2></center>

        <form method="post" action="mail.php">
        
            <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                
                <input type="text" name="amount" required value="Amount Choose: $100"  readonly  style="color:black" >
                <span class="highlight"></span>
                <span class="bar"></span>
                <!--<label>Amount Choose</label>-->
            </div>
            
            <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <input type="text" name="name" required  style="color:black">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Name</label>
            </div>
             <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <input type="textarea" name="address" required  style="color:black">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label  type="textarea">Address</label>
            </div>
            <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <input type="text" name="mail" required  style="color:black">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email ID</label>
            </div>

            <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <input type="text" name="number" required  style="color:black">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Phone No.</label>
            </div>
             <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <input type="textarea" name="address1" required  style="color:black">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label  type="textarea">Billing Address</label>
            </div>
            
             <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <input type="text" name="cardnumber" required  style="color:black">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Card Number</label>
            </div>
             <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <input type="text" name="cvv" required  style="color:black">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>CVV</label>
            </div>
             <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <input type="text" name="expirydate" required  style="color:black">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Expiry date </label>
            </div>

           
            <div class="group col-md-6  col-lg-6 col-sm-12 col-xs-12">
                <center> <button type="submit" name="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button></center>
            </div>
        </form>

    </div>
</div>

	</section>		               	
	<?php include "includes/footer.php" ?>
</body>
</html>