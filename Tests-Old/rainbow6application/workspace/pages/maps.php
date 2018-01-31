<?php 
session_start();
$username = $_SESSION['varname'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- links -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylesPages.css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    
    <!-- Meta Info -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Page Title -->
    <title>Maps</title>
</head>

<?php if(isset($_SESSION['loggedin'])):?>

<body>
	
	<!-- ================================= Collapsible Navigation Bar ================================== -->
    <!-- ======== With thanks to http://www.newthinktank.com/2015/11/learn-bootstrap-one-video/ ======== -->
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <!-- Button that toggles the navbar on and off on small screens -->
            <button type="button" class="navbar-toggle collapsed" aria-label="Menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <!-- Hides information from screen readers -->
                <span class="sr-only"></span>
                <!-- Draws 3 bars in navbar button when in small mode -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Need to add padding to image in CSS -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="../Loggedin.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="/pages/operators.php">Operators</a></li>
                <li><a href="/pages/weapons.php">Weapons</a></li>
                <li class="active"><a href="#">Maps</a></li>
                <li><a href="#LogoutModal" data-toggle="modal"><span class="text-danger">Logout</span></a></li>
<!-------------------------------------------------Logout Modal------------------------------------------------->                
                <div class="modal fade" id="LogoutModal">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" style="text-align:center;">Logging out...</h4>
												<br>
<p style="color:black !important;">Are you sure you want to log out?</p>
<button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
<button class="pull-left btn btn-danger" type="button"><a href="../killsession.php" style="color:black !important;">Logout</a></button>	
				
									</div>
								</div>
										
						</div>
					</div>
				</div>
            </ul>
        </div><!-- Navbar Collapse -->
    </div><!-- Container Fluid -->
    </nav><!-- End Navbar -->
    <!-- =============================================================================================== -->

	
	<div class="container">
	    <h1 id="headerOne">The Maps of Siege</h1>
	</div>
	
	<br><br><br>

<!-------------------------------------------Start Of Maps Page-------------------------------------------------->
<!-----------------------------------------------1st Image------------------------------------------------------->
<div class="container">
<div class="row">
<div class="col-md-4">
	<img id="shadow2" href="#MapModal1" data-toggle="modal" src="/images/maps/Bankthumb.jpg">
	<div class="modal fade" id="MapModal1">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title" style="text-align:center;">Bank</h1>
										</div>
										<br><br>
										
											<h4 style="color:black !important; text-align:center;">Basement</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Bank00.jpg">
											</div>
											
											<h4 style="color:black !important; text-align:center;">First Floor</h4>
											<div class="container">
												<img id="MapImage" src="/images/maps/Bank11.jpg">	
											</div>
											
											<h4 style="color:black !important; text-align:center;">Second Floor</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Bank22.jpg">	
											</div>
											
										</div>
											
											
									<div class="modal-body">
										<button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
</div><!-- End of Col-md-4 -->

<!-----------------------------------------------2nd Image------------------------------------------------------->
<div class="col-md-4">
	<img id="shadow2" href="#MapModal2" data-toggle="modal" src="/images/maps/Chaletthumb.jpg">
	<div class="modal fade" id="MapModal2">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title" style="text-align:center;">Chalet</h1>
										</div>
										<br><br>
										
											<h4 style="color:black !important; text-align:center;">Basement</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Chalet00.jpg">
											</div>
											
											<h4 style="color:black !important; text-align:center;">First Floor</h4>
											<div class="container">
												<img id="MapImage" src="/images/maps/Chalet11.jpg">	
											</div>
											
											<h4 style="color:black !important; text-align:center;">Second Floor</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Chalet22.jpg">	
											</div>
											
										</div>
											
											
									<div class="modal-body">
										<button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
</div><!-- End of Col-md-4 -->

<!-----------------------------------------------3rd Image------------------------------------------------------->
<div class="col-md-4">
	<img id="shadow2" href="#MapModal3" data-toggle="modal" src="/images/maps/Clubthumb.jpg">
<div class="modal fade" id="MapModal3">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title" style="text-align:center;">Club House</h1>
										</div>
										<br><br>
										
											<h4 style="color:black !important; text-align:center;">Basement</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Club00.jpg">
											</div>
											
											<h4 style="color:black !important; text-align:center;">First Floor</h4>
											<div class="container">
												<img id="MapImage" src="/images/maps/Club11.jpg">	
											</div>
											
											<h4 style="color:black !important; text-align:center;">Second Floor</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Club22.jpg">	
											</div>
											
										</div>
											
											
									<div class="modal-body">
										<button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
</div><!-- End of Col-md-4 -->
</div>
</div>

<br><br>

<!-------------------------------------------Start Of Maps Page Section 2---------------------------------------->
<!-----------------------------------------------1st Image------------------------------------------------------->
<div class="container">
<div class="row">
<div class="col-md-4">
	<img id="shadow2" href="#MapModal4" data-toggle="modal" src="/images/maps/Consthumb.jpg">
	<div class="modal fade" id="MapModal4">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title" style="text-align:center;">Consulate</h1>
										</div>
										<br><br>
										
											<h4 style="color:black !important; text-align:center;">Basement</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Cons00.jpg">
											</div>
											
											<h4 style="color:black !important; text-align:center;">First Floor</h4>
											<div class="container">
												<img id="MapImage" src="/images/maps/Cons11.jpg">	
											</div>
											
											<h4 style="color:black !important; text-align:center;">Second Floor</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Cons22.jpg">	
											</div>
											
										</div>
											
											
									<div class="modal-body">
										<button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
</div><!-- End of Col-md-4 -->

<!-----------------------------------------------2nd Image------------------------------------------------------->
<div class="col-md-4">
	<img id="shadow2" href="#MapModal5" data-toggle="modal" src="/images/maps/Housethumb.jpg">
	<div class="modal fade" id="MapModal5">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title" style="text-align:center;">House</h1>
										</div>
										<br><br>
										
											<h4 style="color:black !important; text-align:center;">Basement</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/House00.jpg">
											</div>
											
											<h4 style="color:black !important; text-align:center;">First Floor</h4>
											<div class="container">
												<img id="MapImage" src="/images/maps/House11.jpg">	
											</div>
											
											<h4 style="color:black !important; text-align:center;">Second Floor</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/House22.jpg">	
											</div>
											
										</div>
											
											
									<div class="modal-body">
										<button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
</div><!-- End of Col-md-4 -->

<!-----------------------------------------------3rd Image------------------------------------------------------->
<div class="col-md-4">
	<img id="shadow2" href="#MapModal6" data-toggle="modal" src="/images/maps/Herethumb.jpg">
<div class="modal fade" id="MapModal6">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title" style="text-align:center;">Hereford</h1>
										</div>
										<br><br>
										
											<h4 style="color:black !important; text-align:center;">Basement</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Here00.jpg">
											</div>
											
											<h4 style="color:black !important; text-align:center;">First Floor</h4>
											<div class="container">
												<img id="MapImage" src="/images/maps/Here11.jpg">	
											</div>
											
											<h4 style="color:black !important; text-align:center;">Second Floor</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Here22.jpg">	
											</div>
											
											<h4 style="color:black !important; text-align:center;">Third Floor</h4>
											<div class="container">	
												<img id="MapImage" src="/images/maps/Here33.jpg">	
											</div>
											
										</div>
											
											
									<div class="modal-body">
										<button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
</div><!-- End of Col-md-4 -->
</div>
</div>

    <?php    
        else:?>
        
    <?php
    echo "<SCRIPT type='text/javascript'> 
            alert('you are not logged in')
            window.location.replace(\"index.php\");
            </SCRIPT>";  
?>

</body>    

<?php endif; ?>

<!-----------------------------------------------End of Maps Page------------------------------------------------------->
	

    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    
</body>
</html>