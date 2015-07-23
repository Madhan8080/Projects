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
	<?php
	session_start();
	if(!isset($_SESSION['mobile']))
	{
	echo "<script>window.location='index.php'</script>";
	}
	?>
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GPSCRYPTO - 1.1.3</title>
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
        
        <link rel="stylesheet" href="../assets/plugins/datatables/css/jquery.datatables.min.css">
        
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
        <!-- START Template Header -->
        <header id="header" class="navbar navbar-fixed-top">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <span class="logo-figure"></span>
                    <span class="logo-text"></span>
                </a>
                <!--/ Brand -->
            </div>
            <!--/ END navbar header -->

            <!-- START Toolbar -->
            <div class="navbar-toolbar clearfix">
                <!-- START Left nav -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Sidebar shrink -->
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Sidebar shrink -->

                    <!-- Navbar collapse -->
                    <li class="navbar-toggle">
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="meta">
                                <span class="icon"><i class="ico-sort-by-attributes-alt"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Navbar collapse -->

                    <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="offcanvas" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas left -->

                    <!-- Message dropdown -->
                    
                    <!--/ Message dropdown -->

                    <!-- Notification dropdown -->
                    
                    <!--/ Notification dropdown -->

                    <!-- Search form toggler  -->
                    
                    <!--/ Search form toggler -->
                </ul>
                <!--/ END Left nav -->

                <!-- START navbar form -->
                
                <!-- START navbar form -->

                <!-- START Right nav -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Profile dropdown -->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar"><img src="../assets/image/avatar/avatar7.jpg" class="img-circle" alt="" /></span>
                                <span class="text hidden-xs hidden-sm pl5"><?php echo $_SESSION['name'];?></span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="pa15">
                                
                                <h5 class="semibold hidden-md hidden-lg">
                                    <p class="nm"><?php echo $_SESSION['name'];?></p>
                                    
                                </h5>
                                
                            </li>
                            <li class="divider"></li>
                            
                            <li><a href="javascript:void(0);"><span class="icon"><i class="ico-cog4"></i></span> Profile Setting</a></li>
                            
                            <li class="divider"></li>
                            <li><a href="logout.php"><span class="icon"><i class="ico-exit"></i></span> Sign Out</a></li>
                        </ul>
                    </li>
                    <!--/ Profile dropdown -->

                    <!-- Offcanvas right This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                   
                    <!--/ Offcanvas right -->
                </ul>
                <!--/ END Right nav -->

                <!-- START nav collapse -->
                
                <!--/ END nav collapse -->
            </div>
            <!--/ END Toolbar -->
        </header>
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        <aside class="sidebar sidebar-left sidebar-menu">
            <!-- START Sidebar Content -->
            <section class="content slimscroll">
                <h5 class="heading">Main Menu</h5>
                <!-- START Template Navigation/Menu -->
                <ul class="topmenu" data-toggle="menu">
                    <li>
                        <a href="NewMessage.php"   data-parent=".topmenu">
                            <span class="figure"><i class="ico-home2"></i></span>
                            <span class="text">Send Message</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                       
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li>
                        <a href="History.php"  data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screwdriver"></i></span>
                            <span class="text">View Sent Messages</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        
                        
                        <!--/ END 2nd Level Menu -->
                    </li>
                    
                            
                </ul>
                <!--/ END Template Navigation/Menu -->

                <!-- START Sidebar summary -->
                <!-- Summary -->
                
                <!--/ Summary -->
                <!--/ END Sidebar summary -->
            </section>
            <!--/ END Sidebar Container -->
        </aside>
        <!--/ END Template Sidebar (Left) -->

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Table datatable</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="#">Table</a></li>
                                <li class="active">Datatable</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Zero configuration</h3>
                            </div>
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>To</th>
                                        <th>Message</th>
                                        <th>GPS KEY</th>
                                        <th>CRYPT TYPE</th>
                                        <th>Sent Time</th>
                                    </tr>
                                </thead>
								<?php 
								include "db.php";
								$mobile=$_SESSION['mobile'];
								$sql="SELECT * From message where from_id='$mobile' ORDER BY sent_time DESC";
								$row=$mysqli->query($sql);
								while($rs=$row->fetch_row())
								{
								?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $rs[2];?></td>
                                        <td><?php echo $rs[5];?></td>
                                        <td><?php echo $rs[3];?></td>
                                        <td><?php echo $rs[4];?></td>
                                        <td><?php echo $rs[6];?></td>
                                    </tr>
                                    <?php
									}
									$mysqli->close();
									?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                
                <!--/ END row -->

                <!-- START row -->
                
                <!--/ END row -->

                <!-- START row -->
                
                <!--/ END row -->

                <!-- START row -->
                
                <!--/ END row -->
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-marker="#main" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="-50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START Template Sidebar (right) -->
        <aside class="sidebar sidebar-right">
            <!-- START Sidebar Content -->
            <section class="content slimscroll">
                <!-- START Sidebar Profile -->
                <!-- Panel -->
                <div class="panel">
                    <!-- thumbnail -->
                    <div class="thumbnail">
                        <!-- media -->
                        <div class="media">
                            <!-- meta -->
                            <span class="meta text-center">
                                <h5 class="semibold mb0">Erich Reyes</h5>
                                <p class="nm"><i class="ico-user7 mr5"></i>Administrator</p>
                            </span>
                            <!-- meta -->
                            <!-- indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ indicator -->
                            <img data-toggle="unveil" src="../assets/image/background/400x250/placeholder.jpg" data-src="../assets/image/background/400x250/background3.jpg" alt="Cover" width="100%">
                        </div>
                        <!--/ media -->
                    </div>
                    <!--/ thumbnail -->
                    <!-- panel body -->
                    <div class="panel-body" style="margin-top:-55px;z-index:2;">
                        <ul class="list-unstyled">
                            <li class="text-center">
                                <img class="img-circle" src="../assets/image/avatar/avatar7.jpg" alt="" width="75px" height="75px">
                                <br>
                                <!-- dropdown -->
                                <div class="btn-group mt10">
                                    <button type="button" class="btn btn-default"><span class="hasnotification hasnotification-success mr5"></span>Online</button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Away</a></li>
                                        <li><a href="#">Offline</a></li>
                                        <li><a href="#">Busy</a></li>
                                    </ul>
                                </div>
                                <!--/ dropdown -->
                            </li>
                        </ul>
                    </div>
                    <!--/ panel body -->
                </div>
                <!--/ Panel -->
                <!--/ END Sidebar Profile -->

                <!-- START Sidebar contact -->
                <div class="media-list media-list-contact">
                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar1.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Autumn Barker</span>
                            <span class="media-meta ellipsis">Malaysia</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar2.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Giselle Horn</span>
                            <span class="media-meta ellipsis">Bolivia</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-danger mr5"></span> Austin Shields</span>
                            <span class="media-meta ellipsis">Timor-Leste</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-danger mr5"></span> Caryn Gibson</span>
                            <span class="media-meta ellipsis">Libya</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar3.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Nash Evans</span>
                            <span class="media-meta ellipsis">Honduras</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar4.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Josiah Johnson</span>
                            <span class="media-meta ellipsis">Belgium</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Philip Hewitt</span>
                            <span class="media-meta ellipsis">Bahrain</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar5.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Wilma Hunt</span>
                            <span class="media-meta ellipsis">Dominica</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar6.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Noah Gill</span>
                            <span class="media-meta ellipsis">Guatemala</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar8.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> David Fisher</span>
                            <span class="media-meta ellipsis">French Guiana</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar9.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Samantha Avery</span>
                            <span class="media-meta ellipsis">Jersey</span>
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="media">
                        <span class="media-object pull-left">
                            <img src="../assets/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Madaline Medina</span>
                            <span class="media-meta ellipsis">Finland</span>
                        </span>
                    </a>
                </div>
                <!--/ END Sidebar contact -->
            </section>
            <!--/ END Sidebar Content -->
        </aside>
        <!--/ END Template Sidebar (right) -->

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
        
        <script type="text/javascript" src="../assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        
        <script type="text/javascript" src="../assets/plugins/datatables/tabletools/js/tabletools.min.js"></script>
        
        <script type="text/javascript" src="../assets/plugins/datatables/tabletools/js/zeroclipboard.js"></script>
        
        <script type="text/javascript" src="../assets/plugins/datatables/js/jquery.datatables-custom.min.js"></script>
        
        <script type="text/javascript" src="javascript/tables/datatable.js"></script>
        
        <!--/ App and page level scrip -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>