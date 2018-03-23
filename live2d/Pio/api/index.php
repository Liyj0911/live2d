<?php 

/*缓存时间设置
$seconds_to_cache = 10;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Expires: $ts"); header("Pragma: cache");
header("Cache-Control: max-age=$seconds_to_cache");
*/

//This will get an array of all the gif, jpg and png images in a folder 
$img_array = glob("/var/www/html/live2d/Pio/api/src/*.{gif,jpg,png}",GLOB_BRACE); 
//Pick a random image from the array 
$img = array_rand($img_array); 
//Display the image on the page 
//echo '<img alt="'.$img_array[$img].'" src="'.$img_array[$img].'" />'; 

$imgurl = $img_array[$img];

if($imgurl) { //实际是 image/PNG
	header('Content-Type: image/PNG'); @ob_end_clean(); @readfile($imgurl); @flush(); @ob_flush(); 
	exit();
} else {
	exit('error');
}
?>
