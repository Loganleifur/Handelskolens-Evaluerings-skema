<?php
session_start();
require 'DB.php';
if (isset($_POST['save'])) {

	 $class = mysqli_real_escape_string($conn, $_POST['class']);
	 $_SESSION['l_class'] = $class;
	//error handlers
	//check for empty fields
	if (empty($class)) {
	header("location: ../Classinfo.php?signUp=empty");
	exit();
			}else {
				$sql = "SELECT * FROM class WHERE class ='$class';";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);
				
				if ($resultcheck > 0) {
				header("location: ../Signup_K.php?signUp=ClassNameTaken");
			exit();
				} else {

					$sql = "INSERT INTO class (class) VALUES
					('$class');";
					mysqli_query($conn, $sql);
					$_SESSION['users'] = $row['username'];
					header("location: ../ClassInfo.php?signUp=success");
                    exit();
                }
            }

}else{
     header("location: ../Admin.php?signup=FAILURE");
     exit();
}
 ?>