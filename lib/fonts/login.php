<?php
session_start();
echo "asdad";
$mysqli = new mysqli('localhost','root','','metri');
if($_SERVER['REQUEST_METHOD']=='POST')
{
$name = $_POST['username'];
$password = $_POST['password'];
echo $name;

$sql = "SELECT * from USERS WHERE first ='$name' AND pwd= '$password'";

$result = mysqli_query($sql);
         or die('error'.mysql_error());

         $row = mysqli_fetch_array($result);
         if($row['first']==$name && $row['pwd']==$password)
         {
         	echo "login sucess";
         }


}


?>