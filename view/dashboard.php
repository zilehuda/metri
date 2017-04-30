
<?php
require('../resource/config.php');
include('../resource/inc/header.php');
include('../resource/inc/navbar.php'); ?>


    

    <div class="container">
      <div class="container">
        <h1>Welcome 
        <?php 
        
         echo $_SESSION['first'];?> !</h1>
      </div>        
    <div class="col-md-3">
    <div class="panel panel-primary">
  <div class="media box">
  <div class="col-md-12">
    <div class="media-left">
      <a href="#">
        <img class="media-object" src="../resource/images/64x64.svg" alt="...">
      </a>
    </div>
    <div class="media-body ">
      <h4 class="media-heading">Welcome <?php 
          

        echo $_SESSION['first'];?></h4>
        age: <?php echo $_SESSION['age'];?><br>
        Religous: <?php echo $_SESSION['religion'];?><br>
        Mother Tongue:<?php echo $_SESSION['mt'];?><br>
        
    </div>
    </div>
   
  </div>
</div>
<div class="panel panel-primary">
 <div class="panel-heading">Invitations</div>
  <div class="panel-body">

   <?php 
   $id = $_SESSION['lid'];
   
   $sql = mysql_query("SELECT first from USERS where id in (SELECT uid FROM intrested where iid = '$id') ");


 while( $row = mysql_fetch_array($sql)) {?>
        <div class="radio">
     
<form action="../controller/BIntrestedController.php" method="POST">
        
  <label><button type="submit" name="<?php  echo $row['first'];?>" class="btn btn-primary" style="width:100px;"><?php  echo $row['first'];?></label>
</button>
</form>

</div>

<?php };?>

    
  </div>

</div>
    </div>

    

    <div class="col-md-6">
   <div class="row">
      <div class="panel panel-default">
  <div class="panel-heading">New Matches</div>
      <?php
      
 $sql = mysql_query("SELECT * FROM USERS ");


 while( $row = mysql_fetch_array($sql))
 {
    ?>
  <div class="panel-body">
    <div class="col-md-2">
      <div class="row">
    <a href="#">
      <img class="media-object img-circle" src="../resource/images/64x64.svg" alt="...">
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="row">

    <h4><?php echo $row['first'];?></h4>
    </div>
      <div class="row">
           <?php echo $row['age'].",". $row['religion'].",".$row['mt'];?>
           </div>
      <div class="row">
        <?php echo $row['profile'].",". $row['radio'].",".$row['email'];?>
      </div>
      </div>
  </div>
 <hr>
  <?php } ?>
 
  <div class="panel-body">
    <div class="col-md-2">
      <div class="row">
    <a href="#">
      <img class="media-object img-circle" src="images/64x64.svg" alt="...">
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="row">
    <h4>Sarah</h4>
    </div>
      <div class="row">
           5'3, Muslim, English
           </div>
      <div class="row">
        Not Working, Karachi, Pakistan
      </div>
      </div>
  </div>
</div>
   </div>
   <div class="row">
      <div class="panel panel-default">
  <div class="panel-heading">My Matches</div>
  <div class="panel-body">
    <div class="col-md-2">
      <div class="row">
    <a href="#">
      <img class="media-object img-circle" src="images/64x64.svg" alt="...">
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="row">
    <h4>Sarah</h4>
    </div>
      <div class="row">
           5'3, Muslim, English
           </div>
      <div class="row">
        Not Working, Karachi, Pakistan
      </div>
      </div>
  </div>
  <hr>
  <div class="panel-body">
    <div class="col-md-2">
      <div class="row">
    <a href="#">
      <img class="media-object img-circle" src="images/64x64.svg" alt="...">
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="row">
    <h4>Sarah</h4>
    </div>
      <div class="row">
           5'3, Muslim, English
           </div>
      <div class="row">
        Not Working, Karachi, Pakistan
      </div>
      </div>
  </div>
</div>
   </div>

    </div>

    <div class="col-md-3">

    <div class="panel panel-primary">
  <div class="panel-heading">Updade And Unlock</div>
  <div class="panel-body">
    <ul>
  <li>Connect Instanty</li>
  <li>Acess Detail Profile</li>
  <li>Get Notify by more members</li>
</ul>
  </div>
</div>
 <?php
      
 $sql = mysql_query("SELECT * FROM USERS ");


 while( $row = mysql_fetch_array($sql))
 {
    ?>
 <div class="panel panel-primary">
  <div class="panel-heading">Partner Search</div>
  <div class="panel-body">
    <form action="../controller/searchController.php" method = "POST">
        <div class="form-group">
                      <label for="religion">Religion:</label>
                      <select class="form-control" id="religion" name="religion">

                   <?php $sql = mysql_query("SELECT DISTINCT(religion) FROM USERS ");


 while( $row = mysql_fetch_array($sql)) {?>     <option value="<?php echo $row['religion'];?>">
<?php  echo $row['religion'];?> </option>
                        
                        <?php };?>
                      </select>
                    </div>
        <div class="form-group">
                      <label for="mt">Mother Toungue:</label>
                      <select class="form-control" id="mt" name="mt">

                   <?php $sql = mysql_query("SELECT DISTINCT(mt) FROM USERS ");


 while( $row = mysql_fetch_array($sql))
 {?>   
                        <option value="<?php echo $row['mt'];?>"><?php  echo $row['mt'];?></option>

                       <?php }?>
                        
                      </select>
                    </div>
                    <button class="btn btn-primary" name="search">Search</button>
                    
    </form>
  </div>
</div>

  <?php } ?>
    </div>

    </div>

       

    
<?php include('../resource/inc/footer.php');?>