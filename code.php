<?php

$text = $_REQUEST['a'];
$font_position = $_REQUEST['b'];
$image = $_REQUEST['c'];
$font_size = $_REQUEST['d'];
$font_color = $_REQUEST['e']; 
$font_name = $_REQUEST['f'];
$author = 'By: '.$_REQUEST['g'];


  //Set the Content Type
  header('Content-type: image/jpeg');

  // Create Image From Existing File
  $jpg_image = imagecreatefromjpeg('./image/'.$image);

  // Allocate A Color For The Text
  if($font_color === 'black')
  {
  $color = imagecolorallocate($jpg_image, 0, 0, 0);
  }
  
  if($font_color === 'white')
  {
  $color = imagecolorallocate($jpg_image, 255, 255, 255);
  }

if($font_color === 'green')
{
  $color = imagecolorallocate($jpg_image, 0, 255, 0);
}

if($font_color === 'red')
{
  $color = imagecolorallocate($jpg_image, 255, 0, 0);
}

  // Set Path to Font File
  $font_path = './font/'.$font_name;

  // Set Text to Be Printed On Image
  //$text = "This is a sunset!";

  // Print Text On Image(size,angle,left-padding,top-padding)
  imagettftext($jpg_image, $font_size, 0, 50, $font_position, $color, $font_path, $text);
  imagettftext($jpg_image, $font_size - 20, 0, 70, $font_position + 100 , $color, $font_path, $author);
  
  

  // Send Image to Browser
  imagejpeg($jpg_image);

  // Clear Memory
  imagedestroy($jpg_image);
?>