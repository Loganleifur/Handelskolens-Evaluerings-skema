<?php
session_start();
require 'DB.php';
if (isset($_POST['elev'])) {

	 $users = mysqli_real_escape_string($conn, $_POST['users']);
	 $pass = mysqli_real_escape_string($conn, $_POST['password']);
	

	 $_SESSION['users'] = $users;
	//error handlers
	//check for empty fields
	if (empty($users) || empty($pass)) {
	header("location: ../Signup_E.php?signUp=empty");
	exit();
			}else {
				$sql = "SELECT * FROM userelev WHERE username ='$users';";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);
				
				if ($resultcheck > 0) {
				header("location: ../Signup_E.php?signUp=usertaken");
			exit();
				} else {
					//hashing the password
					$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
					//insert the user into the database
					$sql = "INSERT INTO userelev (username, password) VALUES
					('$users','$hashedPass');";
					mysqli_query($conn, $sql);
					header("location: ../ElevInfo.php?signUp=success");
					exit();
				}
		} 	
}else{
	header("location: Signup_E.php");
	exit();
}
?>
