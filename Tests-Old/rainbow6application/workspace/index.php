
<html lang="en">

<head>
    <!-- links -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesPages.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Meta Info -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Page Title -->
    <title>Home Page</title>
</head>

<body>
    
    <div class="container">
        <h1 id="headerMain">Rainbow Six Assistant</h1>
    </div>
    
    <br><br><br>
    
    <!-- LOGIN -->

    <div class="container">
        
        <div id="loginButtons">
            <a href="#LoginModal" data-toggle="modal" data-target="#login-modal">
            <button class="btn btn-primary btn-lg">Login</button></a>
    
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        	    <div class="modal-dialog">
    				<div class="loginmodal-container">
    				    <h1>Login to Your Account</h1><br>
    				    <form action="loggincheck.php" method="POST">
    					<input type="text" name="user" placeholder="Username">
    					<input type="password" name="pass" placeholder="Password">
    					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
    				    </form>
    				</div>
    			</div>
    		</div>
    		 
    		  
        <!-- REGISTER -->		  
            <a href="#RegisterModal" data-toggle="modal" data-target="#reg-modal">
            <button class="btn btn-secondary btn-lg" type="button">Sign up</button></a>
    
            <div class="modal fade" id="reg-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        	    <div class="modal-dialog">
    				<div class="regmodal-container">
    					<h1>Register to Your Account</h1><br>
    				    <form action="register.php" method="POST">
    					<input type="text" name="user" placeholder="Username">
    					<input type="password" name="pass" placeholder="Password">
    					<input type="submit" name="login" class="reg regmodal-submit" value="Register">
    				    </form>
    				</div>
    			</div>
    		</div>
    	</div>
    	
	</div>
    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</body>
</html>

