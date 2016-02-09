<!doctype html>
<?php

	$gallery = htmlspecialchars($_GET['galleryid'], ENT_QUOTES);

	$isMainGallery = $gallery === "MainGallery";
	
?>
<html lang="en">
<head> 
	<?php include 'header.php'?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
	<style>
		<?php if ($isMainGallery): ?>
		.hover_zoom_active a.expand{display: block; visibility:visible; opacity:.6; transition-delay:0s;}
		a.expand{
			font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', 'Palatino LT STD', Georgia, serif;
			width: 100%;
			visibility:hidden;
			opacity:0;
			transition:visibility 0s linear 0.5s,opacity 0.5s linear;
			position: absolute;
			z-index: 100;
			height: 60px;
			text-align: center;
			color: #fff;
			line-height: 50px;
			font-weight: 700;
			font-size: 30px;
			bottom: 50%;}
		<?php else: ?>
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
		<?php endif ?>
	</style>
 
    </head>
<body>
	<?php include 'navbar.php';?>
	<div id="page-wrap" class="row">
		<div class="large-3 medium-1 columns show-for-large-up" id="side_banner"><img id="banner_image" data-bind="attr : {src : sidebarimage}"/></div>
		<div class="js-masonry large-9 medium-9 small-12 columns" data-masonry-options='{ "itemSelector": ".grid-item" }'>
			<div class="row grid-wrapper">
				<!--ko foreach: grid.images -->
				<div class="grid-item <?php if ($isMainGallery): ?>large-4 medium-4 <?php else: ?>large-2 medium-3<?php endif ?> small-6 columns grid-image end">
					<div class="grid_image_wrapper">
						<div class="img_hidden center_image"><img class="center_image" data-bind='lazyImage: url, attr : {alt : alt, title : title, "data-zoom" : $data.zoomurl}'></div>
						<div class="image_zoom_scrim" data-reveal-id="zoom-modal" data-bind="click: <?php if ($isMainGallery): ?>function(){<?php echo "window.location='" . $galleryprefix ."'" . "+" ?>$data.title;}<?php else: ?>$parent.zoomIn<?php endif ?>"><a href="#" class="expand"<?php if ($isMainGallery): ?>data-bind="text : $data.title"<?php ?><?php else: ?><?php endif ?>><?php if ($isMainGallery): ?><?php ?><?php else: ?>+<?php endif ?></a></div>
					</div>
				</div>
				<!--/ko -->
			</div>
	</div>
	<div id="zoom-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
		<img id="modal_image" data-bind="attr : {src : $data.zoomImage}"></img>
	</div>
	<!-- ko if: $data.zoomImage -->
		<div id="scrim" data-bind="click: $data.unZoom"></div>
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
			$(this).closest('.img_hidden').removeClass('img_hidden');
			$('.js-masonry').masonry();
        });
    }
};
	
	
</script>
<?php include 'footer.php';?>


</html>