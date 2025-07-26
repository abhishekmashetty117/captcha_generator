<?php
	session_start();
?>
<?php 
	$captcha = rand(10000,99999);
	$_SESSION["image_captcha"] = $captcha;
	$height = 42;
	$width = 100;
	$image_size = imagecreate($width, $height);
	$background_color = imagecolorallocate($image_size, 120, 120, 120);
	$captcha_color = imagecolorallocate($image_size, 255,255,255);
	$font_size = 14;
	$x_cord = 25;
	$y_cord = 12;
	imagestring($image_size, $font_size, $x_cord, $y_cord, $captcha, $captcha_color);
	imagejpeg($image_size,null,80);
?>