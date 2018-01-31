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
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '".md5($password)."'"; 
            
            //Run the query and store whatever data we get in the variable $result
            $result = $db->query($sql);
            //check that the query has found a matching row
            if ($result->num_rows > 0) {
            $row = $result;
            
            $_SESSION['varname'] = $username;
            $_SESSION['loggedin'] = $row;
            echo "<SCRIPT type='text/javascript'> 
            window.location.replace(\"Loggedin.php\");
            </SCRIPT>";                
                   
            }
            
            else {

            echo "<SCRIPT type='text/javascript'> 
            alert('login failed')
            window.location.replace(\"index.php\");
            </SCRIPT>";                   
            
            }
                    
            //Close the database connection afterwards
            $db->close();
?>