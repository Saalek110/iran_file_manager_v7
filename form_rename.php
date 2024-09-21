                <?php

$masir=$_GET['masir'];
$my_filename=$_GET['filename'];
$dir=$_GET['dir'];
echo "__".$my_filename."__";

?>
   <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'  enctype="multipart/form-data">


new_name <input type="text" name="new_file_name"  style=" font-size:16px; height:40px; width:150px;" >

yes <input type="text" name="yes_or_no_1"  style=" font-size:16px; height:20px; width:50px;" >


<?php
             echo'<input type="hidden" id="custId" name="filename"  value='.$my_filename.'>';

             echo'<input type="hidden" id="custId" name="masir"  value='.$masir.'>';
             
             echo'<input type="hidden" id="custId" name="dir"  value='.$dir.'>';
     ?>        
      <input type="submit" value="rename" name="action_rename" style=" font-size:16px; height:60px; width:100px">
<?php

?>                          
