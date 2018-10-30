<?php

//   	$name = filter_input(INPUT_POST, 'name1');
// 	$Pnumber = filter_input(INPUT_POST, 'Pnumber1');
// 	$email = filter_input(INPUT_POST, 'email1');
   	$password = filter_input(INPUT_POST, 'password1');
   	$username = filter_input(INPUT_POST, 'username');
   
   	if(!empty($username)){

	   	if(!empty($password)){
            echo "goes into if";
	   //			$db = mysqli_connect('localhost:3306','rovhol0','Px42KMJ1uhcP0IN','rovhol0_database1');
				// echo "connected,";
				// Create connection
                $conn = new mysqli('localhost:3306','rovhol0','Px42KMJ1uhcP0IN','rovhol0_database1');
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                
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
                }
                $conn->close();
                
                
				

    //         if(mysqli_connect_error()){
   	//           die('connection Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
    //         }else{
                   

    //           		$sql = "SELECT PERSON_PASSWORD FORM PEOPLE'";
    //           	// 	$sql = "SELECT * FROM PEOPLE WHERE PERSON_NUMBER='$Pnumber' AND PERSON_PASSWORD='$password' LIMIT 1";
               
    //           	// 	$out = mysql_query($db, $sql);
    //           		$result = $db->query($sql);
    //           		echo $result;
               		
    //           	// 	$numofrows = mysqli_num_rows($out);
    //           	// 	echo 
				// 	if($numofrows == 1){
				// 		echo "you're logged in";			
				// 	}
				// 	else{
				// 		echo "not logged";
				// 	}

    //           		$db->close();      

    //               }
	   		
	   		
		}
		else{
   		
   		echo "password cannot be empty";
   		die();
   	    }
   	}
   	else{
   		
   		echo "person number or email cannot be empty";
   		die();
   	}

?>
