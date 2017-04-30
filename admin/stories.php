<?php include('../resource/inc/header.php') ?>
<?php include('../admin/inc/nav.php') ?>
<?php require('../resource/config.php');?>

  <div class="col-md-9 animated bounce">
    <h1 class="page-header">Dashboard</h1>
    <ul class="breadcrumb">
      <li><span class="glyphicon glyphicon-home">&nbsp;</span>Home</li>
      <li><a href="#">Dashboard</a></li>
    </ul>
    <table class="table table-hover">
      <thead>
        
        <th class="text-center">#</th>
        <th>Title</th>
        <th class="text-center">EDIT</th>
         <th class="text-center">DELETE</th>
        

      </thead>
      <tbody>
        <!--
          <tr>
            <td><input type="checkbox" /></td>
            <td class="text-center">1</td>
            <td width="70%">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
            <td class="text-center" width="10%">Admin</td>
            <td><span class="label label-info">Pending</span></td>
          </tr>
-->
        <!-- START CONTENT END -->
        
           
          <?php
 $sql = mysqli_query($link,"SELECT * FROM stories");
 while( $row = mysqli_fetch_array($sql))
 {
    ?>  
        <tr>
          <td class="text-center"><?php echo $row['storyId']; ?></td>
          <td width="70%"><?php echo $row['title']; ?></td>
          <td class="text-center" width="10%"><button type="submit" class="btn btn-primary">EDIT</button></td>
          <td class="text-center" width="10%"><button type="submit" class="btn btn-danger">DELETE</button></td>
       
          </td>
        </tr>
            <?php  } ?>

        <!-- DUMP CONTENT END -->

      </tbody>

    </table>
    <div class="text-center">
  <a href="../admin/addStories.php"><button type="submit" class="btn btn-success text-center">Add Story</button></a>
</div>

  </div>
</div>

</div>

</body>

</html>