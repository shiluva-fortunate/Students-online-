<?php


   	$name = filter_input(INPUT_POST, 'name');
	$Pnumber = filter_input(INPUT_POST, 'Pnumber');
	$email = filter_input(INPUT_POST, 'email');
   	$password = filter_input(INPUT_POST, 'password');
   	if(!empty($Pnumber)){

	   	if(!empty($password)){

	   			$db = mysqli_connect('localhost:3306','rovhol0','Px42KMJ1uhcP0IN','rovhol0_database1');
   			   #or die('Error connecting to MySQL server.');
				echo "connected,";

                if(mysqli_connect_error()){

   		          die('connection Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
                   }
               else{

               		$sql = "INSERT INTO PEOPLE (PERSON_NAME, PERSON_NUMBER, PESRSON_EMAIL, PERSON_PASSWORD)
               		values ('$name', '$Pnumber', '$email', '$password')";
						if($db->query($sql)){
		
							echo " a new record is added";
							header( "Location: reg.html" );
						}
						else{
							
							echo "error: ".$sql ."<br>". $db->error;
						}

               		$db->close();      

                   }
	   		
	   		
		}
		else{
   		
   		echo "password cannot be empty";
   		die();
   	    }
   	}
   	else{
   		
   		echo "person number cannot be empty";
   		die();
   	}

?>
