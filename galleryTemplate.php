<!doctype html>

<html lang="en">
<head> 
	<meta charset="utf-8">
	
    <title>Spackman Home</title>
    <meta name="description" content="Homepage Spackman photography">
    <meta name="author" content="Me">
	<?php include 'header.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
	<style>
		.grid-item {
		  margin-bottom: 0.5rem;
		}
		.grid-image{margin-top: 2em; cursor: pointer}
		.grid_image_wrapper{border: 3px solid white; position: relative}
		#page-wrap{margin-top: 15px}		
		.hover_zoom_active{position:absolute; bottom:0; left: 0; right:0; overflow: hidden; height: 100%; width: 100%; display: block; background: rgba(0, 0, 0, 0.6)}
		.hover_zoom_active a.expand{display: block; visibility:visible; opacity:1; transition-delay:0s;}
		a.expand{
			visibility:hidden;
			opacity:0;
			transition:visibility 0s linear 0.5s,opacity 0.5s linear;
			position: absolute;
			z-index: 100;
			width: 60px;
			height: 60px;
			border: solid 5px #fff;
			text-align: center;
			color: #fff;
			line-height: 50px;
			font-weight: 700;
			font-size: 30px;
			-webkit-border-radius: 30px;
			-moz-border-radius: 30px;
			-ms-border-radius: 30px;
			-o-border-radius: 30px;
			border-radius: 30px;
			left: 0;
			right: 0;
			bottom: 50%;
			margin: 0 auto -30px auto;}
	</style>
 
    </head>
<body>
	<?php include 'navbar.php';?>
	<div id="page-wrap" class="row">
		<div class="js-masonry large-9 medium-9 small-12 columns medium-offset-2 large-offest-2" data-masonry-options='{ "itemSelector": ".grid-item" }'>
			<div class="row grid-wrapper">
				<!--ko foreach: grid.images -->
				<div class="grid-item large-2 medium-3 small-6 columns grid-image end">
					<div class="grid_image_wrapper">
						<img class="center_image" data-bind='lazyImage: url, attr : {alt : alt, title : title, "data-zoom" : $data.zoomurl}'>
						<div class="image_zoom_scrim" data-reveal-id="zoom-modal" data-bind="click: $parent.zoomIn"><a href="#" class="expand">+</a></div>
					</div>
				</div>
				<!--/ko -->
			</div>
	</div>
	<div id="zoom-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
		<img id="modal_image" data-bind="attr : {src : $data.zoomImage}"></img>
	</div>
	<!-- ko if: $data.zoomImage -->
		<div id="scrim" style="position: fixed; width: 100%; height: 100%; opacity: 0.7" data-bind="click: $data.unZoom"></div>
	<!-- /ko -->
</body>

<script>
	var viewModel = getGridViewModel();
	viewModel.initZoom();
	
	
	ko.bindingHandlers.lazyImage = {
    update: function(element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        var $element     = $(element),
            // we unwrap our imageUrl to get a subscription to it,
            // so we're called when it changes.
            // Use ko.utils.unwrapObservable for older versions of Knockout
        imageSource  = ko.unwrap(valueAccessor());
        
        $element.attr('src', imageSource);
        
        $element.one('load', function() {
			$('.js-masonry').masonry();
        });
    }
};
	
	
</script>
<?php include 'footer.php';?>
</html>