<?php
$target_dir = "uploads/";
$uploadOk = 1;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);

    $check = getimagesize($_FILES["uploadfile"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }


?>