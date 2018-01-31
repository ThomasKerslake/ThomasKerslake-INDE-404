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
    <title>Operators</title>
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
                <li class="active"><a href="#">Operators</a></li>
                <li><a href="/pages/weapons.php">Weapons</a></li>
                <li><a href="/pages/maps.php">Maps</a></li>
                <li><a href="#LogoutModal" data-toggle="modal" ><span class="text-danger" >Logout</span></a></li>
        
        </div><!-- Navbar Collapse -->
    </div><!-- Container Fluid -->
    </nav><!-- End Navbar -->
    <!-- =============================================================================================== -->
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

    
    
    
    
        <div class="container">
        
    	<h1 id="headerOne">Operators of Siege</h1>

    </div>
    
    <div class="container">
		<div class="row">
		    <br>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="thumbnail">
				<img src="/images/operators/Sledge_SAS.jpg" alt="Sledge SAS">
					<div class="caption">
						<h3>Sledge</h3>
                        <p id="thumbText">SAS attacker equiped with a sledge hammer that is deadly against brittle walls.</p>
                        <p id=thumbText>Armour: ●●○ Speed:: ●●○ </p>
                    </div>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="thumbnail">
				<img src="/images/operators/Thatcher_SAS.jpg" alt="Thatcher SAS">
					<div class="caption">
						<h3>Thatcher</h3>
						<p id="thumbText">SAS attacker equiped with EMP grenades that will disable electronics.</p>
						<p id="thumbText">Armour: ●●○ Speed:: ●●○ </p>
					</div>
				</div>
			</div>
			
		</div>
    </div>
    
        <div class="container">
		<div class="row">
		    <br>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="thumbnail">
				<img src="/images/operators/Smoke_SAS.jpg" alt="Smoke SAS">
					<div class="caption">
						<h3>Smoke</h3>
                        <p id="thumbText">SAS defender equiped with a poison gas canister that will damage whoever it comes in contact with.</p>
                        <p id=thumbText>Armour: ●●○ Speed:: ●●○ </p>
                    </div>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="thumbnail">
				<img src="/images/operators/Mute_SAS.jpg" alt="Mute">
					<div class="caption">
						<h3>Mute</h3>
						<p id="thumbText">SAS defender equiped with a Signal Disruptor which jams remotely detonated gadgets.</p>
						<p id="thumbText">Armour: ●●○ Speed:: ●●○ </p>
					</div>
				</div>
			</div>
			
		</div>
    </div>
    
    
        <div class="container">
		<div class="row">
		    <br>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="thumbnail">
				<img src="/images/operators/Ash_FBI.jpg" alt="Smoke SAS">
					<div class="caption">
						<h3>Ash</h3>
                        <p id="thumbText">FBI attacker equiped with a M120 CREM with 2 breaching rounds that will detonate automatically.</p>
                        <p id=thumbText>Armour: ●○○ Speed:: ●●● </p>
                    </div>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="thumbnail">
				<img src="/images/operators/Thermite_FBI.jpg" alt="Mute">
					<div class="caption">
						<h3>Thermite</h3>
						<p id="thumbText">FBI attacker equiped with a Brimstone BC-3 Exothermic Charge that can can breach reinforced walls.</p>
						<p id="thumbText">Armour: ●●○ Speed:: ●●○ </p>
					</div>
				</div>
			</div>
			
		</div>
    </div>
    
    
        <div class="container">
		<div class="row">
		    <br>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="thumbnail">
				<img src="/images/operators/Castle_FBI.jpg" alt="Smoke SAS">
					<div class="caption">
						<h3>Castle</h3>
                        <p id="thumbText">FBI defender equiped with bulletproof armour panels to barricade doors and windows</p>
                        <p id=thumbText>Armour: ●●○ Speed:: ●●○ </p>
                    </div>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="thumbnail">
				<img src="/images/operators/Pulse_FBI.jpg" alt="Mute">
					<div class="caption">
						<h3>Pulse</h3>
						<p id="thumbText">FBI defender equiped with a Heartbeat sensor that will track an enemy within distance.</p>
						<p id="thumbText">Armour: ●○○ Speed:: ●●● </p>
					</div>
				</div>
			</div>
			
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
   
    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    
</body>
</html>