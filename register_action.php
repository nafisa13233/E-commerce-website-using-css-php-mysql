
	<?php 
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userphone = $_POST['userphone'];
    $useraddress = $_POST['useraddress'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    
    if (!empty($username)) {
	    if (!empty($useremail)) {
	    	if (!empty($userphone)) {
	    		if (!empty($useraddress)) {
	    			if (!empty($password_1)){
	    				if (!empty($password_2) && $password_1 == $password_2){
	    					$host = "localhost";
	    			  		$dbusername = "root";
	    					$dbpassword = "";
	    					$dbname = "170204112";
	    					$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	    					if (mysqli_connect_error()) {
	    						die('Connect Error ('.mysqli_connect_errorno() . ') '
								. mysqli_connect_error()) ;
	    					}	
	    					else{
	    						//check db for existing user with same username and email
	    						$user_check_query = "SELECT * FROM user WHERE Username = '$username' or Email = '$useremail' LIMIT 1";
	    						$results = mysqli_query($conn, $user_check_query) or die(mysqli_error($conn));
                                $user = mysqli_fetch_assoc($results);
                                if ($user) {
	                      			if($user['Username'] == $username){
	                      				echo "Username already exists";
	                      			}
									if($user['Email'] == $useremail){
										echo "This email id already has a registered username";
									}
								}
								//Register User if no error
								if($user==0){
	                            	$password = md5($password_1); //this will encrypt the password
	    							$sql = "INSERT INTO user (Username,Email,Phone,Address,Password)
	    							values ('$username','$useremail','$userphone','$useraddress','$password_1')";
	    							$_SESSION['Username'] = $username;
	                  				$_SESSION['success'] = "You are now logged in";
	                  				header("location:index.php");
	    							if ($conn->query($sql)) {
										echo "Sucessfull";
							    	}
							   		 else{
										echo "Error:".$sql ."<br>". $conn->error;
							    	}
							   		
								}
								$conn->close();
                            }
	    				}else{
	    					echo "Passwords do not match ";
	    				}
	    			}else{
	    				echo "Password should not be empty";
	    			}  
				}else{
					echo "Address should not be empty";
				}
		    }else{
		    	echo "Phone number should not be empty";
		    }
		}else{
			echo "Email should not be empty";
			die();
		}
	}else{
		echo "Username should not be empty";
		die();
	}
?>

