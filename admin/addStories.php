<?php include('../resource/inc/header.php') ?>
<?php include('../admin/inc/nav.php') ?>

  <div class="col-md-9 animated bounce">
    <h1 class="page-header">Dashboard </h1>
    <ul class="breadcrumb">
      <li><span class="glyphicon glyphicon-home">&nbsp;</span>Home</li>
      <li><a href="#">Dashboard</a></li>
    </ul>
     <div class="container">
                  <form method="POST" action="../controller/AdminAddStoriesController.php">
                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Add Title</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                </div>
                </div>
                 <div class="row">
                <div class="col-md-6">
            <div class="form-group">
                      <label for="sel1">Story:</label>
                      <textarea  class="form-control" name="story"> </textarea> 
                     
                    </div>
                </div>
                </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

     </div>


  

  </div>
</div>

</div>

</body>

</html>