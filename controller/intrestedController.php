<?php
require('config.php');
session_start();

  $sql = mysql_query("SELECT * FROM USERS");
      
 while( $row = mysql_fetch_array($sql))
 {
    
if(isset($_POST[$row['first']]))
{
	   $iid = $row['id'];
	   $uid = $_SESSION['lid'];
	   echo $iid ."<br>";
	   echo $uid;
       $sql2 = mysql_query("INSERT INTO INTRESTED(uid,iid)" ." VALUES('$uid','$iid')");


}

}

header('location:../matches.php');



?>