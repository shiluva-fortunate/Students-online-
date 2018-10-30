<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

   	if(!empty($username)){

	   	if(!empty($password)){

	   		$conn = new mysqli('localhost:3306','rovhol0','Px42KMJ1uhcP0IN','rovhol0_database1');
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                else{
                    
                
                $sql = "SELECT * FROM `PEOPLE` WHERE (PERSON_NUMBER='$username' OR PESRSON_EMAIL='$username') AND PERSON_PASSWORD='$password' LIMIT 1";
                $result = $conn->query($sql);
                
                if ($result->num_rows == 1) {
                    // // output data of each row
                    // while($row = $result->fetch_assoc()) {
                    //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    // }
                    echo "you're logged in";
                    header( "Location: login.html" );
                } else {
                    echo "not logged";
                     header( "Location: NotLogged.html" );
                }
                $conn->close();	 

                }   
	   		
	   		
		}
		else{
   		
   		echo "password cannot be empty";
   		die();
   	    }
   	}
   	else{
   		
   		echo "username or person no. cannot be empty";
   		die();
   	}

?>
