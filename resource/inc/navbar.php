<body>

    <!-- Navigation -->
        <?php
        session_start();
        if(!isset($_SESSION['login']))
            {  ?>
        <div class="container" >
            <div class="col-md-6">
        <img src="../resource/images/logo.png" width="300px" height="100px">
        </div>
        <div class="col-md-6">
            <form class="navbar-form navbar-right"  action="../controller/loginController.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="first" placeholder="Username">
                    </div>
                    <div class="form-group passfield">
                        <input type="password" class="form-control" name="pwd" placeholder="Password">
                        <p id="passwordHelpBlock" class="form-text text-muted">
                              forgot password ?
                            </p>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit">Sign In</button>
                    
                </form>
        </div>

    
</div>
                <nav class="navbar navbar-inverse " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../public_html/index.php">Matrimonial Site</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows Profil By<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Register</a>
                            </li>
                            <li>
                                <a href="dashboard.html">dashboard</a>
                            </li>
                            <li>
                                <a href="matches.html">matches</a>
                            </li>
                            <li>
                                <a href="pricing.html">pricing</a>
                            </li>
                            <li>
                                <a href="get-start.html">get start</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Help </a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="../view/register.php">Register</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <?php
            }

        else 
        { ?>
            
<div class="container">
    
    
</div>
            <nav class="navbar navbar-inverse " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Matrimonial Site</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li>
                        <a href="../view/dashboard.php">Dashboard </a>
                    </li>
                    <li>
                        <a href="contact.html">Profile</a>
                    </li>
                   <li>
                        <a href="../view/matches.php">Matches</a>
                    </li>
                     <li>
                      <form action="../controller/logout.php" method="post">  <button type="submit" name="logout" >logout</button></form>
                    </li>
                    
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



            <?php } ?>
    