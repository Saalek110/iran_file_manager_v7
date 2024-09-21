                <?php
$masir=$_POST['masir'];
$dir=$_POST['dir'];
$my_filename=$_POST['filename'];
$yes_or_no=$_POST['yes_or_no_2'];

if ($yes_or_no=="yes")
{
    echo"delete yes";
$jam3=$dir."/".$my_filename;
echo"<br>";
echo "jam3= ".$jam3;

unlink($jam3); 

 }  // Yes or no

?>                          
