<?php 
session_start();
#Generate random char
$n=6; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
$text=getName($n);
$_SESSION["vercode"] = $text; 
$height = 25; 
$width = 65;   
$image_p = imagecreate($width, $height); 
$black = imagecolorallocate($image_p, 243, 243, 243); 
$white = imagecolorallocate($image_p, 0, 0, 0); 
$font_size = 14; 
imagestring($image_p, $font_size, 5, 5, $text, $white); 
imagejpeg($image_p, null, 80); 
?>