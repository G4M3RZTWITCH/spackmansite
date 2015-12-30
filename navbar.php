<?php 
	$homepage = "http://" . $_SERVER['SERVER_NAME'];
	$gallerypage = "/galleryTemplate.php?galleryid=MainGallery";
?>

<header>
	<div class="row">
		<div data-bind="click: function(){window.location='<?php echo $homepage ?>';}" data-name="home" class="large-offset-2 large-1 medium-2 medium-offset-1 columns header-tab">Home</div>
		<div data-name="about" class="large-1 medium-2 columns header-tab">About</div>
		<div data-bind="click: function(){window.location='<?php echo $gallerypage ?>';}" data-name="gallery" class="is-dropdown large-1 medium-2 columns header-tab">Gallery</div>
		<div data-name="legal" class="large-1 medium-2 columns header-tab">Legal</div>
		<div data-name="contact" class="large-1 medium-2 columns end header-tab">Contact</div>
	</div>
	<div class="row">
		<ul class="gallery-dropdown large-offset-4 medium-offset-5"><!--ko foreach: menu.visiblelist --><li><a data-bind="text: title, attr:{href: link}"></a></li><!-- /ko --></ul>
	</div>
	<div class="clear"></div>
</header>
