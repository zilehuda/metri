<?php
require('../resource/config.php');
session_start();

  $sql = mysqli_query($link,"SELECT * FROM USERS");
      
 while( $row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
 {
    
if(isset($_POST[$row['first']]))
{
	   $iid = $row['id'];
	   $uid = $_SESSION['lid'];
	   echo $iid ."<br>";
	   echo $uid;
       $sql2 = mysqli_query("INSERT INTO  BINTRESTED(uid,uid2)" ." VALUES('$uid','$iid')");
       break;
       

}

}

//header('location:../matches.php');



?>