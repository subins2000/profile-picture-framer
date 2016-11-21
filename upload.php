<?php
if(isset($_FILES["image"])){
  require_once "convert.php";
  function rand_string($length) {
     $str="";
     $chars = "subinsblogabcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     $size = strlen($chars);
     for($i = 0;$i < $length;$i++) {
      $str .= $chars[rand(0,$size-1)];
    }
    return $str;
  }

  /**
   * If image is not valid, output a default image
   * @var [type]
   */
  $sourceImg = @imagecreatefromstring(@file_get_contents($_FILES["image"]["tmp_name"]));
  if ($sourceImg === false){
    echo "images/default-profile-pic.png";
    exit;
  }

  $image = makeDP($_FILES["image"]["tmp_name"], (
    isset($_POST["design"]) ? $_POST["design"] : 0
  ));

  $loc = "uploads/" . rand_string(10) . ".png";

  file_put_contents($loc, $image);
  echo $loc;

  imagedestroy($dest);
  imagedestroy($src);
}