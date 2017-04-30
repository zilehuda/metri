<?php 

require('../resource/config.php');



if(isset($_POST['search'])){
   $mt = $_POST['mt'];
   $religion = $_POST['religion'];
   session_start();
  
   $_SESSION['mother'] = $mt;
   $_SESSION['rel'] = $religion;
   echo $mt ;
   echo $religion;
   echo $_SESSION['mother'];
   $_POST['search']=false;




	header('location:../view/matches.php');
} 

	else if(isset($_POST['submit2']) ){
   $mt = $_POST['mttt'];
   $religion = $_POST['rell'];
   session_start();
  
   $_SESSION['mother'] = $mt;
   $_SESSION['rel'] = $religion;
   echo $mt ;
   echo $religion;
   echo $_SESSION['mother'];


   echo "string";


//	header('location:../matches.php');

}
   ?>  