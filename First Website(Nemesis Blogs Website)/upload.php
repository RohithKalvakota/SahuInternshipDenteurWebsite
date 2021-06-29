<?php
 include "dbconnect.php";
  $msg = "";

  if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "image/".basename($filename);

        $sql = "INSERT INTO images (filename) VALUES ('$filename')";

        $query = mysqli_query($db, $sql);

        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
if ($query){
  header('location:imagesupload.php');
}
?>
