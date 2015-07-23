<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre
VERSION : 1.1.3
AUTHOR : Madhan
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html>
    <!-- START Head -->
    <head>
	<?php
	session_start();
	if(!isset($_SESSION['mobile']))
	{
	echo "<script>window.location='index.php'</script>";
	}
	?>
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
        
        <!--/ Plugins stylesheet -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="../assets/library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheet/backend.min.css">
        <link rel="stylesheet" href="../assets/stylesheet/uielement.min.css">
        <!--/ Application stylesheet -->
        <!-- END STYLESHEETS -->

        <!-- START JAVASCRIPT SECTION - Load only modernizr script here -->
        <script src="../assets/library/modernizr/js/modernizr.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
		<style>
	
      html, body, {
        height: 100%;
        margin: 0px;
        padding: 0px;
      }
	  #map-canvas
	{
	width: 500px;
    height: 330px;
   
	}
      .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

    </style>
	<script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initialize() {

  var markers = [];
   var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(12.841126, 80.153044)
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);




  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(12.841126, 80.153044),
      new google.maps.LatLng(12.841426, 80.153144)
	  );
 // map.fitBounds(defaultBounds);

  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
	copy(input);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
function copy(element)
{

        var str=element.value;
		document.getElementById('mad').value=str;
}
function req_focus()
{
		document.getElementById('pac-input').focus();
}

    </script>
    <style>
      #target {
        width: 345px;
      }
    </style>
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
                        <h4 class="title semibold">New Message</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Form</a></li>
                                <li class="active">Layout</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Form default layout -->
                        <form class="panel panel-default" method="post" action="#">
						<?php 
						function getCoordinates($address)
						{
							$address = urlencode($address);
							$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;
							
							//echo $url;
							$response = file_get_contents($url);
							$json = json_decode($response,true);
 
							$lat = $json['results'][0]['geometry']['location']['lat'];
							$lng = $json['results'][0]['geometry']['location']['lng'];
							return array($lat, $lng);
						}
						if(isset($_POST['submit']))
						{

						$coords = getCoordinates($_POST['mad']);
						//print_r($coords);
						$lat=$coords[0];
						$lng=$coords[1];
						$to=$_POST['to_id'];
						$from=$_SESSION['mobile'];
						$message=$_POST['message'];
						$loc=$lat.', '.$lng;
						include "db.php";
						if($loc==', '||$lat='')
						{
						echo "Error occurred while decoding your Reguired GPS KEY... !!<br/> Please Try Again .. !<a href='NewMessage.php'>Click here to Try Again </a>";
						}
						else{
						//date_default_timezone_set('UTC+5:30');
						$date=date("Y-m-d H:i:s");
						$sql="INSERT into message values('0','$from','$to','$loc','RSA','$message','$date')";
						$c=$mysqli->query($sql);
						echo $mysqli->error;
						if($c==1)
						{
						
						echo "Message Sent Success fully and the Keys for decryption is at GPS Location ".$loc;
						}
						}
						}
						else{
					?>
                            <div class="panel-heading">
                                <h3 class="panel-title">New  Message</h3>
                            </div>               
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">To</label>
                                            <input name="to_id"  required type="number" class="form-control">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Message</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                     <div class="row">
									 <div class="col-sm-12">
                                        <textarea class="form-control" required name="message" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Location</label>
											<input id="mad" onfocus="req_focus()" required class="form-control" name="mad" class="controls" type="text" placeholder="Search Box">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Proceed</button>
                                <button type="reset" class="btn btn-inverse">Reset</button>
                            </div>
							<?php
							}
							?>
                        </form>
                        <!--/ Form default layout -->
                    </div>

                    <div id="mapDiv" class="col-md-6">
                        <!-- Form horizontal layout -->
                        <div class="form-horizontal panel panel-default" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Horizontal Layout</h3>
                            </div>               
                            <div class="panel-body">
							<div class="row">
							<div  class="col-sm-6">
							<input id="pac-input" name="pac" class="controls" type="text" placeholder="Search Box" onfocus="copy(this)" onchange="copy(this)" onblur="copy(this)">
                                <div id="map-canvas"></div>
							</div>
							</div>
                            </div>
                           
                        </div>
                        <!--/ Form horizontal layout -->
                    </div>
                </div>
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
        
        <!--/ App and page level scrip -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>