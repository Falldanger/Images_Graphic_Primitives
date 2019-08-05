<?php
	
	$img =imagecreatetruecolor(500, 500);//create area for drawing

	$color=imagecolorallocate($img,255, 235, 205);//set color

	imagearc($img, 250, 60, 40, 56, 0, 360, $color);// Draw ellipse

	$points=[];
	$points[]=242;
	$points[]=34;
	$points[]=236;
	$points[]=24;
	$points[]=244;
	$points[]=30;
	$points[]=250;
	$points[]=20;
	$points[]=256;
	$points[]=30;
	$points[]=264;
	$points[]=24;
	$points[]=258;
	$points[]=34;
	
	imagefilledpolygon($img, $points, 7, imagecolorallocate($img,218, 165, 32));// Draw poligon
	imagerectangle($img, 246, 86, 254, 96, $color);
	imagearc($img, 250, 136, 52, 80, 0, 360, $color);
	imagearc($img, 240, 54, 8, 4, 0, 360, imagecolorallocate($img,211, 211, 211));
	imagearc($img, 260, 54,8,4, 0, 360,imagecolorallocate($img,211, 211, 211));
	imagearc($img, 250, 64,26,18, 0, 180, imagecolorallocate($img,255, 0, 0));

	imageline($img, 232, 110, 190, 80, imagecolorallocate($img,90, 25, 25));
	imageline($img, 268, 110, 310, 80, imagecolorallocate($img,90, 25, 25));

	imagesetthickness($img, 2);// width of line
	imageline($img, 236, 170, 200, 230, imagecolorallocate($img,90, 25, 25));
	imageline($img, 264, 170, 300, 230, imagecolorallocate($img,90, 25, 25));
	imageline($img, 200, 230, 190, 230, imagecolorallocate($img,90, 25, 25));
	imageline($img, 300, 230, 310, 230, imagecolorallocate($img,90, 25, 25));
	//Set filling area
	imagefill($img,250,70,$color);
	imagefill($img,250,130,$color);
	imagefill($img,250,95,$color);
	
	header('Content-Type: image/png');
	imagepng($img);
	imagepng($img,'image.png');
	
	imagedestroy($img);
?>