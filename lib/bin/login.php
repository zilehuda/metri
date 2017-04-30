<?php 
require('phpfolder/config.php');
echo "l";

if(isset($_POST['submit']))
{
 $first = $_POST['first'];
 $pwd = $_POST['pwd'];
 echo "p";

 $sql = mysql_query("SELECT * FROM USERS where first = '$first' AND pwd = '$pwd'");
 if(mysql_num_rows($sql)>0)
 {

session_start();
$_SESSION['login'] = true;
header('location:./dashboard.html');

 }
 


}




?>