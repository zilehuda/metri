<?php
require('../resource/config.php');

$title=$_POST['title'];
$story=$_POST['story'];

$query="INSERT INTO stories(adminId,image,story,title) VALUES('admin','','$story','$title')";


    

     mysqli_query($link,$query) or mysqli_error($link);

header('location:../admin/stories.php');
?>