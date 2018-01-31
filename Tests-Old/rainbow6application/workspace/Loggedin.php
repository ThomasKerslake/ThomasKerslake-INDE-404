<?php 
session_start();
$username = $_SESSION['varname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- links -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/home.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" type="text/css" href="../css/stylesPages.css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Meta Info -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Page Title -->
    <title>Home</title>
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
                <li class="active"><a>Home<span class="sr-only">(current)</span></a></li>
                <li><a href="/pages/operators.php">Operators</a></li>
                <li><a href="/pages/weapons.php">Weapons</a></li>
                <li><a href="/pages/maps.php">Maps</a></li>
                <li><a href="#LogoutModal" data-toggle="modal"><span class="text-danger">Logout</span></a></li>
        
        </div><!-- Navbar Collapse -->
    </div><!-- Container Fluid -->
    </nav><!-- End Navbar -->
    <!-- =============================================================================================== -->
<div class="modal fade" id="LogoutModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align:center;">Logging out...</h4>
                <p style="">Are you sure you want to log out?</p>
                <button class="pull-right btn btn-default" data-dismiss="modal" type="button">Close</button>
                <button class="pull-left btn btn-danger" type="button"><a href="killsession.php" style="color:black !important;">Logout</a></button>	

            </div>
        </div>
    </div>
</div>

</ul>


    <h1 id="headerMain">Rainbow Six Siege Assistant</h1><hr style="color:white;">
    
        <h4 class="welcomeText" style="font-size: 25px;text-align: center;margin-left: auto;margin-right: auto;"><span style="color:white;">Welcome,  <?php echo $username."."?></span></h4>
    
<div class="row1">
    <div class="col-md-4">
        <div class="homePageThumb">
            <div class="container" id="Poswidth">
                <a href="/pages/weapons.php">
                <img id="shadow2" href="/pages/weapons.php" src="./images/Weapons.png" class="Selectionimageleft">
                </a>
                    <a href="/pages/weapons.php">
                        <div class="overlay-left">
                            <div class="Selectiontext"> Weapons
                        </div>
                    </div>
                </a>
            </div>
	    </div>
	</div>
	<div class="col-md-4">
        <div class="homePageThumb">
            <div class="container" id="Poswidth">
                <a href="/pages/maps.php">
                <img id="shadow2" src="./images/Maps.png" class="Selectionimagedown">
                </a>
                    <a href="/pages/maps.php">
                        <div class="overlay-down">
                            <div class="Selectiontext"> Maps
                        </div>
                    </div>
                </a>
            </div>
    	</div>
	</div>
	<div class="col-md-4">
        <div class="homePageThumb">
            <div class="container" id="Poswidth">
                <a href="/pages/operators.php">
                <img id="shadow2"  src="./images/Operators.png" class="Selectionimageright">
                </a>
                    <a href="/pages/operators.php">
                        <div class="overlay-right">
                            <div class="Selectiontext"> Operators
                        </div>
                    </div>
                </a>
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

<?php endif; ?>


    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    
</body>
</html>