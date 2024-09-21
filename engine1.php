        <?php

if (isset($_GET['folder'])  )
{
    if ($_GET['folder']=="empty")
    {
$_SESSION['step1']="empty";
$_SESSION['step2']="empty";
$_SESSION['step3']="empty";
$_SESSION['step4']="empty";
    } // do empty
  //  $step=$_GET['step']
//$my_dir=$my_dir.$_GET['folder'];
if ($_SESSION["step1"]=="empty" || $_SESSION['step1']==NULL) 
 $_SESSION["step1"]=$_GET['folder'];

else if ($_SESSION["step2"]=="empty" || $_SESSION['step2']==NULL)  
 $_SESSION["step2"]=$_GET['folder'];

else if ($_SESSION["step3"]=="empty" || $_SESSION['step3']==NULL)  
 $_SESSION["step3"]=$_GET['folder'];
else if ($_SESSION["step4"]=="empty" || $_SESSION['step4']==NULL)  
 $_SESSION["step4"]=$_GET['folder'];
}  // if folder is set
 //if (  isset(  $_SESSION["username"] )  )
echo"<div id='session_print'>";
echo "sess1= ".$_SESSION['step1']."<br>";
echo "sess2= ".$_SESSION['step2']."<br>";
echo "sess3= ".$_SESSION['step3']."<br>";
echo "sess4= ".$_SESSION['step4']."<br>";
echo"</div>";
if (isset($_SESSION['step1'])) 
if ($_SESSION['step1']!="empty")
$my_dir=$my_dir.$_SESSION['step1'];

if (isset($_SESSION['step2'])) 
if ($_SESSION['step2']!="empty")
$my_dir=$my_dir."/".$_SESSION['step2'];


if (isset($_SESSION['step3'])) 
if ($_SESSION['step3']!="empty")
$my_dir=$my_dir."/".$_SESSION['step3'];


if (isset($_SESSION['step4'])) 
if ($_SESSION['step4']!="empty")
$my_dir=$my_dir."/".$_SESSION['step4'];

?>             
