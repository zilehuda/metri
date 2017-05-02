<?php include('../resource/inc/header.php') ?>
<?php include('../resource/inc/navbar.php') ?>


        <div class="container" >

        

        <form class="form-horizontal" id="Registerform" method="POST" action="../controller/registerController.php">
        <div class="col-md-7 register">
        <div class="row">
           <div class="panel panel-default">
     <div class="panel-heading">Account Detail:</div>
        <div class="panel-body">
        <div class="form-group">
      <label class="control-label col-sm-2" >Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" name="pwd" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Confirm password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="cfmpwd" name="cfmpwd" required>
      </div>
    </div>
      </div>
      </div>
      </div>
           <div class="row">
           <div class="panel panel-default">
     <div class="panel-heading">Personal Information:</div>
        <div class="panel-body">
          <div class="form-group">
      <label class="control-label col-sm-2" >Profile for:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="profile" required>
                        <option value="self">Self</option>
                        <option value="son">Son</option>
                        <option value="danger">Daughter</option>
                      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="first" name="first" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="age" name="age" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Gender:</label>
      <div class="col-sm-10">
               <label class="radio-inline">
              <input type="radio" name="gender" value="male">Male
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender" value="female">Female
            </label>
            </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" >Mother Toungue:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel2" name="mt" required>
                        <option value="urdu">Urdu</option>
                        <option value="punjabi">Punjabi</option>
                        <option value="sindhi">Sindhi</option>
                      </select>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Religion:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel3" name="religion" required>
                        <option value="muslim">Muslim</option>
                        <option value="hindu">Hindu</option>
                        <option value="christen">Christen</option>
                      </select>
      </div>
    </div>
        </div>
      </div>
      </div>
      <div class="row">
           <div class="panel panel-default">
     <div class="panel-heading">Education & Profession:</div>
        <div class="panel-body">
        <div class="form-group">
      <label class="control-label col-sm-2" >Education:</label>
      <div class="col-sm-10">
        <select class="form-control"  name="education" required>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Undergraduate">Undergraduate</option>
                        <option value="Master">Master</option>
                      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Profession:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="profession" required>
                        <option value="not work">Not work</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Engineer">Engineer</option>
                      </select>
      </div>
    </div>
    </div>
      </div>
      </div>
      <div class="row">
           <div class="panel panel-default">
     <div class="panel-heading">About Myself:</div>
        <div class="panel-body">
        <textarea class="form-control" rows="5" name="myself" placeholder="describe about yourself"></textarea>
        </div>
      </div>
      </div>
        </div>

        <div class="col-md-5">
          <div class="row">
           <div class="panel panel-default">
     <div class="panel-heading">Other Details:</div>
        <div class="panel-body">
          <div class="form-group">
      <label class="control-label col-sm-1" >Height:</label>
      <div class="col-sm-12">
        <select class="form-control" id="sel3" name="height" required>
                        <option value="4.7">4'7</option>
                        <option value="5">5</option>
                        <option value="5.6">5'6</option>
                      </select>  
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" >Eye Color:</label>
      <div class="col-sm-12">
        <select class="form-control" id="sel3" name="eye" required>
                        <option value="brown">brown</option>
                        <option value="black">black</option>
                        <option value="blue">blue</option>
                      </select> 
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" >Smoke:</label>
      <div class="col-sm-12">
       <select class="form-control" id="sel3" name="smoke" required>
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                      </select> 
      </div>
    </div>
      
        </div>
      </div>
      </div>
      <div class="row">
           <div class="panel panel-default">
     <div class="panel-heading">Action:</div>
        <div class="panel-body"> 
        <label class="" >I affirm that the information given on this form is true and correct:</label>

         <button type="submit" class="btn btn-danger" name="submit">Submit</button>
        </div>


      </div>
      </div>
        </div>
        </form>
        </div>

          



        </div>

<?php include('../resource/inc/footer.php') ?>

