<?php include('../resource/inc/header.php') ?>
<?php include('../admin/inc/nav.php')  ?>
<?php require('../resource/config.php');?>


  <div class="col-md-9">
    <h1 class="page-header">Dashboard</h1>
    <ul class="breadcrumb">
      <li><span class="glyphicon glyphicon-home">&nbsp;</span>Home</li>
      <li><a href="#">Dashboard</a></li>
    </ul>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Sort By
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
    <table class="table table-hover">
      <thead>
        
        <th class="text-center">#</th>
        <th>Name</th>
        <th class="text-center">View</th>
        <th class="text-center">Delete</th>
      </thead>
      <tbody>
           
          <?php
 $sql = mysqli_query($link,"SELECT * FROM USERS");
 while( $row = mysqli_fetch_array($sql))
 {
    ?>  
        <tr>
          <td class="text-center"><?php echo $row['id']; ?></td>
          <td width="70%"><?php echo $row['first']; ?></td>
          <form method="POST" action="../controller/AdminDeleteController.php">
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
          <td class="text-center" width="10%"><button type="submit" class="btn btn-primary">View</button></td>
          <td class="text-center" width="10%">
          <button type="submit" name="submit" value="delete" class="btn btn-danger">Delete</button></td>
           </form>
           </tr>
    <?php  } ?>
       
        

     

      </tbody>

    </table>
  </div>

</body>

</html>