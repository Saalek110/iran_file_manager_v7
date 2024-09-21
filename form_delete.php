        <?php

$masir=$_GET['masir'];
$my_filename=$_GET['filename'];
$dir=$_GET['dir'];
echo $my_filename;

?>
   <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'  enctype="multipart/form-data">

yes <input type="text" name="yes_or_no_2"  style=" font-size:16px; height:20px; width:50px;" >

<?php
             echo'<input type="hidden" id="custId" name="masir"  value='.$masir.'>';

             echo'<input type="hidden" id="custId" name="dir"  value='.$dir.'>';

             echo'<input type="hidden" id="custId" name="filename"  value='.$my_filename.'>';
?>

      <input type="submit" value="Delete" name="action_delete" style=" font-size:16px; height:60px; width:100px">
<?php
?>             
