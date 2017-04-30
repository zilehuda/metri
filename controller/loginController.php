<?php 
require('../resource/config.php');
echo "l";
session_start();
if(isset($_POST['submit']))
{
 $first = $_POST['first'];
 $pwd = $_POST['pwd'];
 $pwd = md5($pwd);
 echo "p";

 $sql = mysql_query("SELECT * FROM USERS where first = '$first' AND pwd = '$pwd'");


 while( $row = mysql_fetch_array($sql))
 {
 	$age = $row['age'];
 	$Religion = $row['religion'];
 	$mt = $row['mt'];
 	$id = $row['id'];

 }
 if(mysql_num_rows($sql)>0)
 {
 	echo "'string'";

$_SESSION['pwd'] = $pwd;
$_SESSION['first'] = $first;
$_SESSION['age'] = $age;
$_SESSION['religion'] = $Religion;
$_SESSION['mt'] = $mt;
$_SESSION['lid'] = $id;
$_SESSION['login'] = true;

header('location:../public_html/index.php');

 }
 


}




?>