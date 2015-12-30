<?php 
//need to protect against injection.  white list it
	$sliderimages = scandir(dirname(dirname(__FILE__)) . '\\img\\homepageslider', 1);
	$whitelistgalleries = scandir(dirname(dirname(__FILE__)) . '\\img\\galleries\\', 1);
	$headerimagefileprefix = "\\img\\homepageslider\\";
	$gallery = '';
	$gallerypath = '';
	$isMainGallery = false;
	if(!empty($_GET['galleryid'])){
		$gallery = $_GET['galleryid'];
		$isMainGallery = $gallery === "MainGallery";
		if(!empty($gallery) && strlen($gallery) > 0){
			$gallerypath = '/img/galleries/' . $gallery . '/';
			$galleryimages = scandir(dirname(dirname(__FILE__)) . '\\img\\galleries\\' . $gallery, 1);
		}
	}
	$counter = 1;
	header('Content-Type: application/javascript');
?>
 function getGridViewModel() {
	return {"grid" : {"imageNumber" : ko.observable(),
				"images" :  [
					<?php 
					if(in_array($gallery, $whitelistgalleries)){
						end($galleryimages);
						$last = key($galleryimages);
						reset($galleryimages);
						foreach ($galleryimages as $key => $value){
							if($value === "." || $value === ".."){
								continue;
								}
								if ($key !== $last){
									$delim = ',';
								}else{
									$delim = '';
								}
								$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $value);
								echo '{"url" : "' . $gallerypath . $value . '", "alt" : "'.$withoutExt.'", "title" : "'.$withoutExt.'", "zoomurl" : "' . $gallerypath . $value . '"}' . $delim . PHP_EOL;
								$counter++;
						}
					}							
					?>
                ]
				//"gridimageloaded" = function(){console.log('image loaded');}
			}};
 }


function getHomepageViewModel() {
    
    return {"homepage" : {
                "images" : [
					<?php 
					end($sliderimages);
					$last = key($sliderimages);
					reset($sliderimages);
						foreach ($sliderimages as $key => $value){
						if($value === "." || $value === ".."){
							continue;
						}
							if ($key !== $last){
								$delim = ',';
							}else{
								$delim = '';
							}
							echo '{"url" : "' . addslashes($headerimagefileprefix) . $value . '", "alt" : "image'.$counter.'", "title" : "collage'.$counter.'"}' . $delim . PHP_EOL;
							$counter++;
						}
						
					?>
                ]}
           };
}
