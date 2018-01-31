<?php
          session_start();  
            
            //Create variables that will be used to connect to our database
            $servername = getenv ('IP');
            $user = 'thomaskerslake';
            $password = '';
            $database = 'r6_users';
            
            //Connect to the database
            $db = new mysqli($servername, $user, $password, $database);
            
            //Check that we have connected successfully.
            //This condition is true if there was an error
            if($db->connect_error)
            {
                
                //If there was an error, stop our PHP now before we go any further.
                //Also show the error on the screen
                die('Connection failed due to error: ' . $db->connect_error);
            } 

    $username = $_POST['user'];
    $password = $_POST['pass'];
    

    
    //Create a query to get some data
            $checkrow = "SELECT * FROM users WHERE username = '$username'";
            //Run the query and store whatever data we get in the variable $result
            $resultcheck = $db->query($checkrow);

                if ($resultcheck->num_rows > 0) {
                    echo "<SCRIPT type='text/javascript'> 
                    alert('Username already in use');
                    window.location.replace(\"index.php\");
                    </SCRIPT>";
                } 
                else  {
                    $sql = "INSERT INTO `users`(`id`, `username`, `password`) VALUES ('', '$username',md5('$password'))"; 
                    $result = $db->query($sql);
                    echo "<SCRIPT type='text/javascript'> 
                    alert('Account Created');
                    window.location.replace(\"index.php\");
                    </SCRIPT>";
                }  
     
            //Close the database connection afterwards
            $db->close();
      
?>
