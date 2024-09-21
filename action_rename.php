                <?php

$masir=$_POST['masir'];
$dir=$_POST['dir'];
$my_filename=$_POST['filename'];
$yes_or_no=$_POST['yes_or_no_1'];
$new_file_name=$_POST['new_file_name'];

if ($yes_or_no=="yes")
{
$jam3=$dir."/".$my_filename;
echo"<br>";
echo "jam3= ".$jam3;
$jam4=$dir."/".$new_file_name;
echo"<br>";
echo "jam4= ".$jam4;

rename("$jam3","$jam4");
 }  // Yes or no
?>                          
