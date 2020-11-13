<?php

header('Content-type: image/jpeg');


require('image.php');
$image = new Imagick('placeimg_640_480_animals.jpg');

// If 0 is provided as a width or height parameter,
// aspect ratio is maintained
$image->thumbnailImage(100, 0);
$image->rotateImage('orange', 10);
$image->borderImage('white', 100, 100);
echo $image;
$im = new Image();
$im.saySomething();

?>


