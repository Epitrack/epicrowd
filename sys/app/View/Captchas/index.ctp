<?

imagettftext($image, $font_size, 0, $x, $y, $text_color, $font , $code) or die('Error in imagettftext function');
imagepng($image);
imagedestroy($image);

?>