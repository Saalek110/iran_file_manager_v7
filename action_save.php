                                <?php


$masir=$_POST['masir'];
$dir=$_POST['dir'];
$my_filename=$_POST['filename'];

$post_text=$_POST['post_text'];


echo "masir= ".$masir;
echo"<br>";
echo "dir= ".$dir;
echo"<br>";

echo"<pre>";
//echo htmlspecialchars($post_text);
echo"</pre>";

$myfile = fopen("$dir/new_file.php", "w") or die("Unable to open file!");
//fwrite($myfile, "hmad");

fwrite($myfile, $post_text   );
fclose($myfile);

$jam=$dir."/".$my_filename;
echo "jame= ".$jam;
$jam2=$dir."/"."old_".$my_filename;
echo"<br>";
echo "jam2= ".$jam2;

//rename("$jam","$jam2");

$jam3=$dir."/"."new_file.php";
echo"<br>";
echo "jam3= ".$jam3;
$jam4=$dir."/".$my_filename;
echo"<br>";
echo "jam4= ".$jam4;

rename("$jam3","$jam4");

?>                                                    
