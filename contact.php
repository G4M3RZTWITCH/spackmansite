<!doctype html>

<html lang="en">
<head>

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
			<div itemscope itemtype="http://schema.org/Person" class="inner_text large-9 medium-9 small-11 columns  large-offset-1 medium-offset-1 small-offset-1 end">
				
				<p class="text_section"><span class="bolder larger">Contact Information</span> 
                <div class="text_section"><span class="bolder">Name</span>
				<ul>
					<li itemprop="name">Anya Spackman</li>
				</ul></div>
                <div class="text_section"><span class="bolder">Contact Number</span>
				<ul>
					<li itemprop="telephone"><a href="tel:817-714-0323"  data-rel="external">(817) 714 0323</a></li>
				</ul></div>
				<div class="text_section"><span class="bolder">Email</span> 
				<ul>
					<li itemprop="email"><a href="mailto:angelannya@yahoo.com">angelannya@yahoo.com</a></li>
				</ul></div>
                
                
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