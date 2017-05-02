<?php include('../resource/inc/header.php') ?>


<?php include('../resource/inc/navbar.php') ?>
<?php require('../resource/config.php'); ?>


 <?php 
    
     $sql = mysqli_query($link,"SELECT * FROM USERS");
      
 while( $row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
 {
 
    
if(isset($_GET[$row['id']]))
{
 
    
    ?>
<div class="container">
      <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $row['first'];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td>First Name:</td>
                        <td><?php echo $row['first'];?></td>
                      </tr>

                       <tr>
                        <td>Last Name:</td>
                        <td><?php echo $row['last'];?></td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        <td><?php echo $row['radio'];?></td>
                      </tr>
                      <tr>
                        <td>Age:</td>
                        <td><?php echo $row['age'];?></td>
                      </tr>
                      <tr>
                        <td>mother tounge</td>
                        <td><?php echo $row['mt'];?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Religion</td>
                        <td><?php echo $row['religion'];?></td>
                      </tr>
                     
                     
                    </tbody>
                  </table>
                  
                  <form action = "../controller/intrestedController.php" method="POST">
  
    
    <div class="media-right">
         <button type="submit" class="btn btn-primary" name="<?php echo $row['id'];?>">Intested</button>
         <button type="submit" class="btn btn-primary">No</button>
    
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
           <?php }};?>
          </div>
        </div>
      </div>
    </div>