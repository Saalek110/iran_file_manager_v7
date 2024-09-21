        <?php
?>  
   <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'  enctype="multipart/form-data">

          
   <center> 
       Select image to upload:
         <input type="file" name="fileToUpload" id="fileToUpload" style=" font-size:16px; height:60px; width:120px">
         <?php
             echo'<input type="hidden" id="custId" name="masir"  value='.$my_dir.'>';
?>
      <input type="submit" value="Upload" name="action_upload" style=" font-size:16px; height:50px; width:80px">
      </form>
<?php
?>             
