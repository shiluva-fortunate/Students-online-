<?php


   	$name = filter_input(INPUT_POST, 'name');
	$Pnumber = filter_input(INPUT_POST, 'Pnumber');
	$email = filter_input(INPUT_POST, 'email');
   	$password = filter_input(INPUT_POST, 'password');
   	if(!empty($Pnumber)){

	   	if(!empty($password)){

	   			$db = mysqli_connect('localhost:3306','rovhol0','Px42KMJ1uhcP0IN','rovhol0_database1');
				echo "connected,";

                if(mysqli_connect_error()){

   		          die('connection Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
                   }
               else{

               		$sql = "SELECT FROM PEOPLE PERSON_PASSWORD WHERE PERSON_NAME='$name'";
						if($db->query($sql)){
		
							echo "logged in;			
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
