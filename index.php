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

<body id="body">
	<?php include 'navbar.php';?>	
    <div class="row">
		<div class="large-3 medium-1 columns show-for-large-up" id="side_banner"><img id="banner_image" data-bind="attr : {src : sidebarimage}"/></div>
        <div class="large-9 small-12 columns" id="center_hero">
            <div id="homepage_hero" class="cycle-slideshow" data-cycle-auto-height=container>
                <!-- ko foreach: homepage.images -->
                <img class="center_image" data-bind="attr : {src : url, alt : alt, title : title}" data-bind="click: function(){return;}"/>
                <!-- /ko -->
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