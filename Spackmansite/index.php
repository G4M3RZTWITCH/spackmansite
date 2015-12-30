<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Spackman Home</title>
    <meta name="description" content="Homepage Spackman photography">
    <meta name="author" content="Me">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/knockout-min.js"></script>
    <script src="js/ImageHelper.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/vendor/jquery.js"></script>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/cycle2.js"></script>
    <style type="text/css">
        #homepage_hero{border: 1px solid lightgrey; padding: 10px; box-shadow: 1px 5px 20px 5px #C6C6C6; margin-top: 25px}
       .row {max-width: none}
        header{margin-top: 10px; height: 50px}
        footer{margin-top: 25px}
       .header-tab{font-size: 1.25em; font-weight: bold; color:#C6C6C6; text-align: center; height: 50px; line-height: 50px; margin-left: 10px}
        .header-tab:hover{cursor: pointer; background: #C6C6C6; border: 1px solid darkgrey; color: white;box-shadow: 1px 5px 20px 5px #C6C6C6}
    </style>
</head>

<body id="body">
    <header>
        <div class="row">
            <div class="large-offset-5 large-1 medium-2 medium-offset-1 columns header-tab">Home</div>
            <div class="large-1 medium-2 columns header-tab">About</div>
            <div class="large-1 medium-2 columns header-tab">Gallery</div>
            <div class="large-1 medium-2 columns header-tab">Legal</div>
            <div class="large-1 medium-2 columns end header-tab">Contact</div>
        </div>
		<div id="home-dropdown" class="dropdown" data-id="home-dropdown">
		
		<!-- Ill have to ajax in the content -->
		<div class="inner-content">
			<ul id="menu-modal"><!-- ko foreach : homepage.menu.visiblelist -->test<!--/ko--></ul>
		</div>
</div>
    </header>
    <div class="row">
        <div class="large-12 small-12 columns" id="center_hero">
            <div id="homepage_hero" class="cycle-slideshow">
                <!-- ko foreach: homepage.images -->
                <img class="center_image" data-bind="attr : {src : url, alt : alt, title : title}"/>
                <!-- /ko -->
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="large-8 large-centered columns">
                TEST FOOTER
            </div>
        </div>
    </footer>
</body>
    <script>
        if(!jQuery){
            var elem = document.getElementById('body');
            document.write('<scr' + 'ipt src="js/vendor/jquery.js"></scr' + 'ipt>');   
        }
    </script>
    <script>
        var viewModel = getHomepageViewModel();
		viewModel.menu = getMenuViewModel();
        ko.applyBindings(viewModel);
		
		$(document).ready(function(){
			$('header').on('mouseenter', '.header-tab', {'show': true}, dostuff);
			$('header').on('mouseleave', '.header-tab', {'show': false}, dostuff);
		});
		function dostuff(event){
			if(event.data.show){
				console.log('in');
			}else{
				$('#home-dropdown').hide();
			}
			
		}
    </script>
</html>