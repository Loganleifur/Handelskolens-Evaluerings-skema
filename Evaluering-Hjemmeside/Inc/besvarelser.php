<?php 
session_start();
require 'DB.php';
mysqli_set_charset($conn,"utf8");

$user = $_SESSION['e_user'];
//$ElevId = $_GET['username'];
	if (isset($_POST['elev'])) {
		$valg1 = mysqli_real_escape_string($conn, $_POST['valg1']);
		$valg2 = mysqli_real_escape_string($conn, $_POST['valg2']);
		$valg3 = mysqli_real_escape_string($conn, $_POST['valg3']);
		$valg4 = mysqli_real_escape_string($conn, $_POST['valg4']);

		echo "yoo it works";
		$sql = "INSERT INTO besvarelser (Elevid, svar1, svar2, svar3, svar4)
		VALUES ('$user', '$valg1', '$valg2', '$valg3', '$valg4');";
		mysqli_query($conn, $sql);
		header("location: ../Inc/elev_evalueringside2.php");
		exit();
		} 
		else { 
		//header("location: ../Inc/elev_evaluering.php");
		echo "K�re $user";
		echo " du bliver desv�rre n�dt til at kalde p� din l�rer";
	
}

print_r ($_POST);

//this is to be used to send data from the elev eval to the database
?>