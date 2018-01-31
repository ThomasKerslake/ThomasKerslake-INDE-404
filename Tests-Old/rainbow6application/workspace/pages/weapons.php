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
    <title>Weapons</title>
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
                <li class="active"><a href="#">Weapons</a></li>
                <li><a href="/pages/maps.php">Maps</a></li>
                <li><a href="#LogoutModal" data-toggle="modal" ><span class="text-danger" >Logout</span></a></li>
                
                
<div class="modal fade" id="LogoutModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align:center;">Logging out...</h4>
                <p style="">Are you sure you want to log out?</p>
                <button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
                <button class="pull-left btn btn-danger" type="button"><a href="../killsession.php" style="color:black !important;">Logout</a></button>	

            </div>
        </div>
    </div>
</div>

</ul>
                
            </ul>
            </div>
        </div><!-- Navbar Collapse -->
    </div><!-- Container Fluid -->
    </nav><!-- End Navbar -->
    <!-- =============================================================================================== -->
    
    
    
    
    <div class="container">
        
    	<h1 id="headerOne">Weapons of Siege <small> Click the images for more details!</small></h1>

    </div>
    
    <div class="container">
		<div class="row">
		    <br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="thumbnail">
				<img src="../images/weapons/R4C.jpg" alt="..." data-toggle="modal" data-target="#r4cModal">
					<div class="caption">
						<h3>R4-C (ASSAULT RIFLE)</h3>
                        <p id="thumbText">FBI SWAT standard issue assault rifle. Highly customizable, for medium to long range conflict.</p>
                    </div>
				</div>
			</div>
			
			<!-- R4C Modal -->
			<div class="modal fade" id="r4cModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modalHead">R4-C</h4>
                        </div>
                        <div class="modal-body" id="modalText">
                            <p id="modalText"><span id="statHead">General Information:</span>
                            <hr id="hrWep">
                            <ul>
                                <li>Type</li>
                                <ul><li>Assault Rifle</li></ul><br>
                                <li>Fire Modes</li>
                                <ul><li>Automatic</li>
                                    <li>Semi-Automatic</li></ul><br>
                                <li>Users</li>
                                <ul><li>Recruit</li>
                                    <li>Ash</li></ul><br>
                                <li>Affiliation</li>
                                <ul><li>FBI SWAT</li></ul><br>
                            </ul>
                            </p>
                            <p id="modalText"><span id="statHead">Statistics:</span>
                            <hr id="hrWep">
                            <ul>
                                <li>Damage</li>
                                <ul><li>42</li>
                                    <li>34 (Suppressed)</li>
                                </ul><br>
                                <li>Rate of Fire</li>
                                <ul><li>860 RPM</li></ul><br>
                                <li>Mobility</li>
                                <ul><li>50</li></ul><br>
                                <li>Magazine Size</li>
                                <ul><li>30+1</li></ul><br>
                            </ul>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End R4C Modal -->
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="thumbnail">
				<img src="../images/weapons/F2.jpg" alt="..." data-toggle="modal" data-target="#f2Modal">
					<div class="caption">
						<h3>F2 (ASSAULT RIFLE)</h3>
						<p id="thumbText">Versatile assault rifle used by GIGN for medium to long range, with automatic and burst fire modes.</p>
					</div>
				</div>
			</div>
			
			<!-- F2 Modal -->
			<div class="modal fade" id="f2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modalHead">F2</h4>
                        </div>
                        <div class="modal-body" id="modalText">
                            <p id="modalText"><span id="statHead">General Information:</span>
                            <hr id="hrWep">
                            <ul>
                                <li>Type</li>
                                <ul><li>Assault Rifle</li></ul><br>
                                <li>Fire Modes</li>
                                <ul><li>Automatic</li>
                                    <li>3-Round Burst</li>
                                    <li>Semi-Automatic</li></ul><br>
                                <li>Users</li>
                                <ul><li>Recruit</li>
                                    <li>Twitch</li></ul><br>
                                <li>Affiliation</li>
                                <ul><li>GIGN</li></ul><br>
                            </ul>
                            </p>
                            <p id="modalText"><span id="statHead">Statistics:</span>
                            <hr id="hrWep">
                            <ul>
                                <li>Damage</li>
                                <ul><li>39</li>
                                    <li>33 (Suppressed)</li>
                                </ul><br>
                                <li>Rate of Fire</li>
                                <ul><li>980 RPM</li></ul><br>
                                <li>Mobility</li>
                                <ul><li>50</li></ul><br>
                                <li>Magazine Size</li>
                                <ul><li>30+1</li></ul><br>
                            </ul>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End F2 Modal -->
            
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="thumbnail">
				<img src="../images/weapons/C7E.jpg" alt="..."  data-toggle="modal" data-target="#c7eModal">
					<div class="caption">
						<h3>C7E (ASSAULT RIFLE)</h3>
						<p id="thumbText">Canadian assault rifle with both semi-automatic and fully automatic fire modes.</p>
					</div>
				</div>
			</div>
			
				<!-- C7E Modal -->
			<div class="modal fade" id="c7eModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modalHead">C7E</h4>
                        </div>
                        <div class="modal-body" id="modalText">
                            <p id="modalText"><span id="statHead">General Information:</span>
                            <hr id="hrWep">
                            <ul>
                                <li>Type</li>
                                <ul><li>Assault Rifle</li></ul><br>
                                <li>Fire Modes</li>
                                <ul><li>Automatic</li>
                                    <li>3-Round Burst</li>
                                    <li>Semi-Automatic</li></ul><br>
                                <li>Users</li>
                                <ul><li>Recruit</li>
                                    <li>Jackal</li></ul><br>
                                <li>Affiliation</li>
                                <ul><li>GEO</li></ul><br>
                            </ul>
                            </p>
                            <p id="modalText"><span id="statHead">Statistics:</span>
                            <hr id="hrWep">
                            <ul>
                                <li>Damage</li>
                                <ul><li>46</li>
                                    <li>39 (Suppressed)</li>
                                </ul><br>
                                <li>Rate of Fire</li>
                                <ul><li>800 RPM</li></ul><br>
                                <li>Mobility</li>
                                <ul><li>50</li></ul><br>
                                <li>Magazine Size</li>
                                <ul><li>30+1</li></ul><br>
                            </ul>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End C7E Modal -->
			
		</div>
    </div>
    
    <div class="container">
		<div class="row">
		    <br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="thumbnail">
				<img src="http://placehold.it/500x185" alt="...">
					<div class="caption">
						<h3>M45 MEUSOC (PISTOL)</h3>
                        <p id="thumbText">Semi-automatic, high caliber pistol with medium stopping power and extended range.</p>
                    </div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="thumbnail">
				<img src="http://placehold.it/500x185" alt="...">
					<div class="caption">
						<h3>LFP586 (PISTOL)</h3>
						<p id="thumbText">.357 magnum revolver, short to medium range handgun, with high stopping power and penetration.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="thumbnail">
				<img src="http://placehold.it/500x185" alt="...">
					<div class="caption">
						<h3>USP40 (PISTOL)</h3>
						<p id="thumbText">.40 caliber semi-automatic pistol that has a low recoil, best used in mid-range combat.</p>
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