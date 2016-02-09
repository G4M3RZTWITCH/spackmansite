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
<meta charset="utf-8">

<title>Spackman Photography</title>
<meta name="description" content="Anna Spackman delivers beautiful photos for whatever occasion is at hand.  Proudly serving the Dallas, Arlington, and Fort Worth areas of Texas.">
<meta name="author" content="Chris Santiago">
<meta property="og:title" content="Spackman Photography"/>
<meta property="og:image" content="http://spackmanphotography.com//img/homepageslider/lolly.jpg"/>
<meta property="og:site_name" content="Anna Spackman Photography"/>
<meta property="og:description" content="Anna Spackman delivers beautiful photos for whatever occasion is at hand.  Proudly serving the Dallas, Arlington, and Fort Worth areas of Texas."/>
	
<link rel="stylesheet" href="http://cdn.foundation5.zurb.com/foundation.css" />
<link rel="stylesheet" href="css/globalstyles.css" />
<script src="js/vendor/modernizr.js"></script>
<script src="js/knockout-min.js"></script>
<script src="http://cdn.foundation5.zurb.com/foundation.js"></script>
<script src="js/ImageHelper.php<?php echo $appender?>"></script>
<script src="js/MenuHelper.php"></script>