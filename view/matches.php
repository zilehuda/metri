
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
   <?php $sql = mysql_query("SELECT DISTINCT(religion) FROM USERS ");
 while( $row = mysql_fetch_array($sql)) {?>
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
     <?php $sql = mysql_query("SELECT DISTINCT(mt) FROM USERS ");


 while( $row = mysql_fetch_array($sql)) {?>
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
    $sql = mysql_query("SELECT * FROM USERS WHERE religion = '$rel' AND mt = '$m'");
      
 while( $row = mysql_fetch_array($sql))
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
      <h4 class="media-heading"> <?php echo $row['first'] . " " .$row['last'];?></h4>
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
         <button type="submit" class="btn btn-primary" name="<?php echo $row['first'];?>">Intested</button>


         <button type="submit" class="btn btn-primary">No</button>
    </div>
    </div>
    </form>
  </li>

  <?php };?>
  <li class="media box">
  <div class="col-md-8">
    <div class="media-left">
      <a href="#">
        <img class="media-object" src="../resource/images/64x64.svg" alt="...">
      </a>
    </div>
    <div class="media-body ">
      <h4 class="media-heading">Media heading</h4>
        age: 28<br>
        Religous: 28<br>
        Mother Tongue: 28<br>
        Education: 28<br>
    </div>
    </div>
    <div class="col-md-4">
    <div class="media-right">
         <h4 >Interested ?</h4>
         <button type="submit" class="btn btn-primary">May be</button>
         <button type="submit" class="btn btn-primary">No</button>
    </div>
    </div>
  </li>
  <li class="media box">
  <div class="col-md-8">
    <div class="media-left">
      <a href="#">
        <img class="media-object" src="images/64x64.svg" alt="...">
      </a>
    </div>
    <div class="media-body ">
      <h4 class="media-heading">Media heading</h4>
        age: 28<br>
        Religous: 28<br>
        Mother Tongue: 28<br>
        Education: 28<br>
    </div>
    </div>
    <div class="col-md-4">
    <div class="media-right">
         <h4 >Interested ?</h4>
         <button type="submit" class="btn btn-primary">May be</button>
         <button type="submit" class="btn btn-primary">No</button>
    </div>
    </div>
  </li>
  
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
