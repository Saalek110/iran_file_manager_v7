                <?php

$masir=$_POST['masir'];
echo $masir;
  //  $target_dir = "top_images/".$masir."/";
//echo "t dir= ".$target_dir;  
$target_dir=$masir."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//-----------------@@@@@@@@@@@@@@
$uploadOk = 1;

// Check if file already exists
 if (file_exists($target_file)) {
echo "<h2 style='color:red'>Sorry, file already exists.</h2>";
         $uploadOk = 0;
      }
// Check file size
 if ($_FILES["fileToUpload"]["size"] > 30000000) {
echo "<h1 style='color:red'>Sorry, your file is too large.</h1>";
$uploadOk = 0;
     }



     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
         echo "<h1 style='color:blue'>Sorry, your file was not uploaded.</h1>";
    // if everything is ok, try to upload file
           } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br><br><br><center><h1>The file:</h1></center>";
        echo "<center> <h1 style='color:Red;'>". basename( $_FILES["fileToUpload"]["name"]). "</h1></center>";
        echo "<center><h1>has been uploaded</h1></center>";

    } else {
        echo "<br><center><h1>Sorry, there was an error uploading your file.</h1></center>";
    }
           }
//----------------@@@@@@@@@@@@@@@



?>                          
