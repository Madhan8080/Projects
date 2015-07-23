<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre
VERSION : 1.1.3
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html>
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GPSCrypto - 1.1.3</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap 3.1.1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="../assets/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        
        <!--/ Plugins stylesheet -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="../assets/library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheet/backend.min.css">
        <link rel="stylesheet" href="../assets/stylesheet/uielement.min.css">
        <!--/ Application stylesheet -->
        <!-- END STYLESHEETS -->

        <!-- START JAVASCRIPT SECTION - Load only modernizr script here -->
        <script src="../assets/library/modernizr/js/modernizr.min.js"></script>
        <!--/ END JAVASCRIPT SECTION -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <section class="container">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <!-- Brand -->
                        <div class="text-center" style="margin-bottom:40px;">
                            <span class="logo-figure inverse"></span>
                            <span class="logo-text inverse"></span>
                            <h5 class="semibold text-muted mt-5">Login to your account.</h5>
                        </div>
                        <!--/ Brand -->

                        <!-- Social button 
                        <ul class="list-table">
                            <li><button type="button" class="btn btn-block btn-facebook">Connect with <i class="ico-facebook2 ml5"></i></button></li>
                            <li><button type="button" class="btn btn-block btn-twitter">Connect with <i class="ico-twitter2 ml5"></i></button></li>
                        </ul>
                        <!-- Social button -->

                        <hr><!-- horizontal line -->

                        <!-- Login form -->
                        <form class="panel"  method="post" action="#">
                            <div class="panel-body">
                                <!-- Alert message -->
                                <div class="alert alert-warning">
                                    <span class="semibold">Note :</span>&nbsp;&nbsp;Just put anything and hit 'sign-in' button.
                                </div>
                                <!--/ Alert message -->
								<?php 
								
								if(isset($_POST['submit']))
								{
								include "db.php";
								$mobile=$_POST['mobile'];
								$pass=md5($_POST['password']);
                                $sql="SELECT Mobile,UserName From users where mobile='$mobile' AND Password='$pass' ";
								echo $sql;
								$rs=$mysqli->query($sql);
								echo $mysqli->error;
								while($row=$rs->fetch_row())
								{
								session_start();
								$_SESSION['mobile']=$row[0];
								$_SESSION['name']=$row[1];
								echo "<script>window.location='NewMessage.php'</script>";
								}
								$mysqli->close();
								}
								?>
                                <div class="form-group">
                                    <div class="form-stack has-icon pull-left">
                                        <input name="mobile" type="text" class="form-control input-lg" placeholder="Mobile Number" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                    <div class="form-stack has-icon pull-left">
                                        <input name="password" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                </div>

                                <!-- Error container -->
                                <div id="error-container"class="mb15"></div>
                                <!--/ Error container -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox custom-checkbox">  
                                                <input type="checkbox" name="remember" id="remember" value="1">  
                                                <label for="remember">&nbsp;&nbsp;Remember me</label>   
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group nm">
                                    <button type="submit" name="submit" class="btn btn-block btn-success"><span class="semibold">Sign In</span></button>
                                </div>
                            </div>
                        </form>
                        <!-- Login form -->

                        <hr><!-- horizontal line -->

                        <p class="text-muted text-center">Don't have any account? <a class="semibold" href="Login.php">Sign up to get started</a></p>
                    </div>
                </div>
                <!--/ END row -->
            </section>
            <!--/ END Template Container -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Library script : mandatory -->
        <script type="text/javascript" src="../assets/library/jquery/js/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/library/jquery/js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="../assets/library/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/library/core/js/core.min.js"></script>
        <!--/ Library script -->

        <!-- App and page level script -->
        <script type="text/javascript" src="../assets/plugins/sparkline/js/jquery.sparkline.min.js"></script><!-- will be use globaly as a summary on sidebar menu -->
        <script type="text/javascript" src="javascript/app.min.js"></script>
        
        <script type="text/javascript" src="../assets/plugins/parsley/js/parsley.min.js"></script>
        
        <script type="text/javascript" src="javascript/pages/login.js"></script>
        
        <!--/ App and page level scrip -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>