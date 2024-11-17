<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php include "includes/head.php" ?>
		<title>Portfolio | L&A LLC in London</title>
<meta name="description" content="">
<script>
/* ============================================================
 * bootstrap-portfilter.js for Bootstrap v2.3.1
 * https://github.com/geedmo/portfilter
 * ============================================================*/
!function(d){var c="portfilter";var b=function(e){this.$element=d(e);this.stuff=d("[data-tag]");this.target=this.$element.data("target")||""};b.prototype.filter=function(g){var e=[],f=this.target;this.stuff.fadeOut("fast").promise().done(function(){d(this).each(function(){if(d(this).data("tag")==f||f=="all"){e.push(this)}});d(e).show()})};var a=d.fn[c];d.fn[c]=function(e){return this.each(function(){var g=d(this),f=g.data(c);if(!f){g.data(c,(f=new b(this)))}if(e=="filter"){f.filter()}})};d.fn[c].defaults={};d.fn[c].Constructor=b;d.fn[c].noConflict=function(){d.fn[c]=a;return this};d(document).on("click.portfilter.data-api","[data-toggle^=portfilter]",function(f){d(this).portfilter("filter")})}(window.jQuery);
</script>
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
							<h1 style="font-size: 44px;color: #ffffff;text-align: center" class="vc_custom_heading section-heading" >Portfolio</h1>
						</div>
					</div>
				</div>
			</div><br><br>
<div class="container">
          <div class="row" style=" margin:20px">  
            <div class="col-xs-12">
    			<button class="btn btn-small btn-danger" data-toggle="portfilter" data-target="all">
					All
				</button>
				<button class="btn btn-small btn-danger" data-toggle="portfilter" data-target="art">
					Web Design
				</button>
				<button class="btn btn-small btn-danger" data-toggle="portfilter" data-target="media">
				SEO
				</button>
				<button class="btn btn-small btn-danger" data-toggle="portfilter" data-target="brand">
				Web Promotion
				</button>
			</div>
          </div>  
               
                     <div class="col-md-4" data-tag='art'>
                       <img src="assets/images/portfolio1.jpg" class="img-responsive" alt="img"><br><br>
					</div>
					<div class="col-md-4" data-tag='media'>
					   <img src="assets/images/portfolio2.jpg" class="img-responsive" alt="img"><br><br>
					</div>
					<div class="col-md-4" data-tag='brand'>
                      <img src="assets/images/portfolio3.jpg" class="img-responsive" alt="img"><br><br>
					</div>
                       
                     
                      
                       
					 <div class="col-md-4" data-tag='art'>
						 <img src="assets/images/portfolio4.jpg" class="img-responsive" alt="img"><br><br>
					</div>
						<div class="col-md-4" data-tag='art'>
						     <img src="assets/images/portfolio5.jpg" class="img-responsive" alt="img"><br><br>
						</div>
                       <div class="col-md-4" data-tag='media'>
                        <img src="assets/images/portfolio6.jpg" class="img-responsive" alt="img"> <br><br>
						</div>
                      <div class="col-md-4" data-tag='art'>
                        <img src="assets/images/portfolio7.jpg" class="img-responsive" alt="img"><br><br>  
				    	</div>
                      	<div class="col-md-4" data-tag='brand'>
						    <img src="assets/images/portfolio8.jpg" class="img-responsive" alt="img"><br><br>
						</div>
			
            
</div>			
			
			
			</section>
               	
	<?php include "includes/footer.php" ?>
</body>
</html>