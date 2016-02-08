<?php 
//need to protect against injection.  white list it
	$sliderimages = scandir('/home/aspackman/public_html/img/homepageslider', 1);
	$whitelistgalleries = scandir('/home/aspackman/public_html/img/galleries', 1);
	$headerimagefileprefix = "\\img\\homepageslider\\";
	$sidebarimage = "\\img\/FloralSpackman05.jpg";
	$gallery = '';
	$gallerypath = '';
	$isMainGallery = false;
	if(!empty($_GET['galleryid'])){
		$gallery = $_GET['galleryid'];
		$isMainGallery = $gallery === "MainGallery";
		if(!empty($gallery) && strlen($gallery) > 0){
			$gallerypath = 'img/galleries/' . $gallery . '/';
			$galleryimages = scandir('/home/aspackman/public_html/img/galleries/' . $gallery, 1);
		}
	}
	$counter = 1;
	header('Content-Type: application/javascript');
?>

var sidebarimage = '<?php echo $sidebarimage; ?>';

 function getGridViewModel() {
 	var $cache  = {};
	$cache.page = $('#page-wrap');
	$cache.zoomModal = $('#zoom-modal');
	var model = {"grid" : {
				imageNumber : ko.observable(),
				sidebarimage : sidebarimage,
				images :  [
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
				},
				zoomImage : ko.observable(),
				zoomIn : function(data, event){
					model.zoomImage(data.zoomurl); 
					$cache.zoomModal.addClass('reveal');
				},
				unZoom: function(){
					$cache.zoomModal.removeClass('reveal');
					model.zoomImage('');
				},
				initZoom : function(){
					$('.grid-wrapper').on('mouseenter', '.center_image', function(e){
						var $hoveredimagescrim = $(this).siblings('.image_zoom_scrim');
						$hoveredimagescrim.addClass('hover_zoom_active');
						$hoveredimagescrim.one('mouseleave', function(e){
							$('.hover_zoom_active').removeClass('hover_zoom_active');
						});
					});
				}
			};
	return model;
 }


function getHomepageViewModel() {
    
    return {"homepage" : {
				"sidebarimage" : sidebarimage,
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

