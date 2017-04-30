<?php include('../resource/inc/header.php') ?>


<?php include('../resource/inc/navbar.php') ?>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container-fluid">

        <!-- Marketing Icons Section -->

        <div class="">
            <div class="container text-center ">
                <form class="form-inline">
                
            <div class="form-group">
                      <label for="sel1">Mother Toungue:</label>
                      <select class="form-control" id="sel1">
                        <option>Urdu</option>
                        <option>Punjabi</option>
                        <option>Sindhi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Religion:</label>
                      <select class="form-control" id="sel1">
                        <option>Muslim</option>
                        <option>Hindu</option>
                        <option>Christen</option>
                      </select>
                    </div>
        <button type="submit" class="btn btn-default">Submit</button>
  </form>       
            </div>
        </div>
        <div class="row ">
        <div class="container">
            <div class="col-lg-12">
                <h1 class="page-header text-center">
                    Find Your Someone Special
                </h1>
            </div>

            <div class="col-md-4 text-center" >
               
                    <i class="fa fa-user-circle fa-large"></i>
                    
                    <div class="panel-body">
                        
                        <h4  class="text-center">
                   Sign Up
                        </h4>
                        <p>Register for free & put up your Profile</p>
                    </div>
                
            </div>
            <div class="col-md-4 text-center" >
               
                    <i class="fa fa-handshake-o fa-large"></i>
                    
                    <div class="panel-body">
                        
                        <h4  class="text-center">
                   Connect
                        </h4>
                        <p>Select & Connect with Matches you like</p>
                    </div>
                
            </div>
            <div class="col-md-4 text-center" >
               
                    <i class="fa fa-comments fa-large"></i>
                    
                    <div class="panel-body">
                        
                        <h4  class="text-center">
                   Interact
                        </h4>
                        <p>Become a Paid Member & Start a Conversation</p>
                    </div>
                
            </div>
            </div>
        </div>
        <!-- /.row -->

         <!-- Plans Section -->
        <div class="row spacer">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h1 class="page-header ">
                    Upgrade MemberShip Plan
                </h1>
                <button type="button" class="btn btn-secondary btn-lg">Brows Our Plans</button>

            </div>
            </div>
        </div>


         <div class="row GetStart">
        <div class="container text-center">
            <div >
                  <h3> Your story is waiting to happen!   <button type="button" class="btn btn-danger ">Get Start Now</button></h3>  
                </div>
                </div>
            </div>
        
        <!-- /.row -->

      
        <!-- Contact Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Contact Us</h2>
            </div>
            <div class="col-md-6">
               <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <div class="col-md-6">
                
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<?php include('../resource/inc/footer.php') ?>