<?php 
	$galleryimages = scandir(dirname(dirname(__FILE__)) . '\\img\\galleries\\', 1);
	$galleriesprefix = "\\img\\gallaries\\";
	$counter = 1;
	header('Content-Type: application/javascript');
?>



function getMenuViewModel() {
	    
    return {"dropdowns" : {
						"about" : [], 
						"contact" : [], 
						"gallery" : [
							<?php 
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
										echo '{"link" : "\\galleryTemplate.php?galleryid=' . $value . '", "title" : "'.$value.'"}' . $delim . PHP_EOL;
										$counter++;
									}
									
								?>
						], 
						"legal" : []},
				"visiblelist" : ko.observableArray([])};
 }
 