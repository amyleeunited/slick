<?php 
	
// Load an image from jpeg URL 
$im = imagecreatefromjpeg( 
'https://media.geeksforgeeks.org/wp-content/uploads/20200123100652/geeksforgeeks12.jpg'); 

// View the loaded image in browser 
header('Content-type: image/jpg'); 
imagejpeg($im); 
imagedestroy($im); 
?> 
