<?php
	$gallerypath = '';
	$appender = '';
	if(!empty($_GET['galleryid']) && isset($_GET['galleryid'])){
		$gallery = $_GET['galleryid'];
		$appender = '?galleryid='.$gallery;
		if(!empty($gallery) and strlen($gallery) > 0){
			$gallerypath = '\\img\\galleries\\' . $gallery;
		}
	}
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
	if(typeof jQuery === 'undefined'){
	 document.write(unescape('%3Cscript src="js/vendor/jquery.js"%3E%3C/script%3E'));   
	}
</script>
<link rel="stylesheet" href="http://cdn.foundation5.zurb.com/foundation.css" />
<link rel="stylesheet" href="css/globalstyles.css" />
<script src="js/vendor/modernizr.js"></script>
<script src="js/knockout-min.js"></script>
<script src="http://cdn.foundation5.zurb.com/foundation.js"></script>
<script src="js/ImageHelper.php<?php echo $appender?>"></script>
<script src="js/MenuHelper.php"></script>