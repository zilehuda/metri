<?php
require('../resource/config.php');

$id=$_POST['id'];
echo $id ;
$query="DELETE FROM USERS WHERE ID='$id'";
mysqli_query($link,$query) or mysqli_error($link);
header('location:../admin/dashboard.php')
?>