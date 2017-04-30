<?php
require('../resource/config.php');

//echo "[pasda";
if(isset($_POST['submit']))
{
     $first=   $_POST['first'];
     $last="ali";
     $pwd=$_POST['pwd'];
     $email=$_POST['email'];
     $age=$_POST['age'];
     $mt=$_POST['mt'];
     $religion = $_POST['religion'];
     $profile = $_POST['profile'];
     $radio = $_POST['gender'];
     $edu = $_POST['education'];
     $pro = $_POST['profession'];
     $myself = $_POST['myself'];
     $height = $_POST['height'];
     $smoke = $_POST['smoke'];
     $eye = $_POST['eye'];
     echo $first;


           // $query = mysql_query("SELECT first FROM USERS where first = '$first' ");

           // if(mysql_num_rows($sec) > 0)
           // {
           // 	echo "sorry this user already exit";
           // 	exit();
           // }   
     echo $pro;
           
           // $pwd = md5($pwd);
           //    mysqli_query($link,"INSERT INTO USERS(first,last,email,age,mt,religion,profile,radio,pwd,education,eye,height,myself,profession,smoke)" . "VALUES('$first','$last','$email','$age','$mt','$religion','$profile','$radio','$pwd','$edu','$eye','$height','$myself','$pro','$smoke')") or die(mysqli_error($link));
           // header('location:../index.html');
     $query="INSERT INTO USERS(first,last,email,age,mt,religion,profile,radio,pwd,education,eye,height,myself,profession,smoke)" . "VALUES('$first','$last','$email','$age','$mt','$religion','$profile','$radio','$pwd','$edu','$eye','$height','$myself','$pro','$smoke')";

     echo $query;

     mysqli_query($link,$query) or mysqli_error($link);
     // mysqli_query($link,"INSERT INTO USERS(first,last,email,age,mt,religion,profile,radio,pwd,education,eye,height,myself,profession,smoke)" . "VALUES('
     //  DD','DD','DDD','12','SD','DD','SON','male','123','ddd','w','d',
     //    'c','c','c')") or die(mysqli_error($link));


}

else{
	echo "asdad";


}





?>