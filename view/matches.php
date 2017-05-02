
<?php
require('../resource/config.php');
include('../resource/inc/header.php');
include('../resource/inc/navbar.php'); ?>

    <div class="container">
        
    <div class="col-md-4">
    <div class="panel panel-primary">
  <div class="panel-heading">Religion</div>
  <div class="panel-body">
    <form action="../controller/searchController.php" method ="POST" >
   <?php $sql = mysqli_query($link,"SELECT DISTINCT(religion) FROM USERS ");
 while( $row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {?>
        <div class="radio">
  <label><input type="radio" name="rell" value="<?php  echo $row['religion'];?>"><?php  echo $row['religion'];?></label>
</div>

<?php };?>
<div class="radio">
  <label><input type="radio" name="optradio">Hindu</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Christen</label>
</div>
    </form>
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">Mother Tongue</div>
  <div class="panel-body">
    <form action="../controller/searchController.php" method ="POST">
     <?php $sql = mysqli_query($link,"SELECT DISTINCT(mt) FROM USERS ");


 while( $row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {?>
        <div class="radio">

        
  <label><input type="radio" name="mttt" value="<?php  echo $row['mt'];?>"><?php  echo $row['mt'];?></label>
</div>

<?php };?>
<div class="radio">
  <label><input type="radio" name="optradio">Punjabi</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Sindhi</label>
</div>
    </form>
  </div>
</div>
        <div class="panel panel-primary">
  <div class="panel-heading">Marital Status</div>
  <div class="panel-body">
    <form>
        <div class="radio">
  <label><input type="radio" name="optradio">Never Married</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Divorced</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Widowed</label>
</div>
    </form>
  </div>
</div>



    </div>

    <div class="col-md-8">

        <ul class="media-list">
        <form action="../controller/searchController.php" method="POST">
        
    <div class="input-group">
    
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" name="submit2" >Go!</button>
      </span>

     
    </div><!-- /input-group -->
 </form>
    <?php 
    

    $rel =  $_SESSION['rel'];
    $m = $_SESSION['mother'];
    $sql = mysqli_query($link,"SELECT * FROM USERS WHERE religion = '$rel' AND mt = '$m'");
      
 while( $row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
 {
    ?>
  <li class="media box">
  <div class="col-md-8">
    <div class="media-left">
      <a href="#">
        <img class="media-object" src="../resource/images/64x64.svg" alt="...">
      </a>
    </div>
    <div class="media-body ">
      <form action = "profile.php" method="GET">
      <button type="submit" class="btn btn-default" name="<?php echo $row['id'];  ?>"><h4 class="media-heading"> <?php echo $row['first'] . " " .$row['last'];?></h4></button>
</form>
        age: <?php echo $row['age'];?><br>
        Religous: <?php echo $row['religion'];?><br>
        Mother Tongue: <?php echo $row['mt'];?><br>
        Profile: <?php echo $row['profile'];?><br>
    </div>
    </div>
    <form action = "../controller/intrestedController.php" method="POST">
    <div class="col-md-4">
    
    <div class="media-right">
         <h4 >Interested ?</h4>
         <button type="submit" class="btn btn-primary" name="<?php echo $row['id'];?>">Intested</button>


         <button type="submit" class="btn btn-primary">No</button>
    </div>
    </div>
    </form>
  </li>

  <?php };?>

  
  
</ul>

    </div>

    </div>

       

    

        <!-- Footer -->
         <footer >
           <div >
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Matrimonial Site</p>
                </div>
            </div>
        </footer>
         
       

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
