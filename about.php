<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Spackman Home</title>
    <meta name="description" content="Homepage Spackman photography">
    <meta name="author" content="Me">
	<?php include 'header.php'?>
	<script src="js/vendor/cycle2.js"></script>
</head>
<style type="text/css">
.right_text_zone {  background-image: url("img/anya.jpg");
	background-repeat: no-repeat;
	height: 635px;
	padding: 20px
}
.inner_text{ background-color: white;
	padding: 10px 20px;
	opacity: .75;
	height: 100%;
}
.testimonial{font-style: italic;}
.bolder{font-weight: bold; font-size: 1.1em}
.text_section{text-indent: 25px}
</style>
<body id="body">
	<?php include 'navbar.php';?>	
    <div class="row">
		<div class="large-3 medium-1 columns show-for-large-up" id="side_banner"><img id="banner_image" data-bind="attr : {src : sidebarimage}"/></div>
        <div class="large-9 small-12 columns right_text_zone end">
			<div  itemscope itemtype ="http://schema.org/LocalBusiness" class="inner_text large-9 medium-9 small-11 columns  large-offset-1 medium-offset-1 small-offset-1 end">
				<p class="text_section">My name is Anya Spackman. I want to thank you for taking the time to stop by and view the results of something I love doing.  
				I enjoy taking happy vibrant photos and turning them into lasting memories for you to keep! I strive to treat my clients like I treat my friends.</p>
 
				<p itemscope itemtype ="http://schema.org/Review" class="text_section"><span class="bolder">Testimonial</span>
				<p itemprop="reviewBody" itemtype ="http://schema.org/Text" class="testimonial text_section">"Anya was a delightful surprise to us.  She had an air of professionalism about her, yet able to convey a confident and relaxed atmosphere to my family and I.  We being fairly shy
				and indecisive did not hinder Anya.  We had no real foreplanning, but she was able to pick a destination and during the shoot help and guide us much like a director for a film.  Her creativity and attention
				to the minute details allowed her to produce idealistic photos and scenes.  Also the editing that she did was simplistic and tactful as to not detract from the photo itself but instead bring them
				to life."</p><p>-The Santiago's</p>
				</p>
				
				<p itemscope itemtype ="http://schema.org/PriceSpecification" class="text_section"><span class="bolder">My Rates</span> 
                
				<ul><li>Potrait: ( on location, individual, or family) - <span itemprop="maxPrice" itemtype ="http://schema.org/Number">150</span>$</li>
				<li>Model/Entertainer portfolio - 150$</li>
				<li>Event - 145$ an hour</li>
				<li>Extra Service: ( image editing/ airbrushing) - <span itemprop="minPrice" itemtype ="http://schema.org/Number">50</span>$</li></ul></p>
				
				<p class="text_section"><span class="bolder">Area</span>
					<p itemprop="areaServed" itemtype ="http://schema.org/Text">Dallas, TX</p>
					<p itemprop="areaServed" itemtype ="http://schema.org/Text">Fort Worth, TX</p>
					<p itemprop="areaServed" itemtype ="http://schema.org/Text">Arlington, TX</p>
				</p>
			</div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="large-8 large-centered columns">
                <!-- TEST FOOTER WILL GO HERE AT SOME POINT-->
            </div>
        </div>
    </footer>
  
    <script>
        var viewModel = getHomepageViewModel();
    </script>
	
</body>
<?php include 'footer.php';?>

</html>