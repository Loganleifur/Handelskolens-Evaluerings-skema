<?php 
session_start();
require 'DB.php';
$user = $_SESSION['e_user'];
mysqli_set_charset($conn,"utf8");

if (isset($_POST['elev'])) {
	$valg5 = mysqli_real_escape_string($conn, $_POST['valg5']);
	$valg6 = mysqli_real_escape_string($conn, $_POST['valg6']);
	$valg7 = mysqli_real_escape_string($conn, $_POST['valg7']);
	$valg8 = mysqli_real_escape_string($conn, $_POST['valg8']);
	$valg9 = mysqli_real_escape_string($conn, $_POST['valg9']);
	$valg10 = mysqli_real_escape_string($conn, $_POST['valg10']);
	$text = mysqli_real_escape_string($conn, $_POST['textarea']);

	echo "yoo it works";
	$sql = "UPDATE besvarelser SET 
		svar5 = $valg5,
		svar6 = $valg6,
		svar7 = $valg7,
		svar8 = $valg8,
		svar9 = $valg9,
		svar10 = $valg10,
		bemaerkning = '$text'
		WHERE Elevid = '$user'";

	mysqli_query($conn, $sql);
	header("location: ../Inc/elev_afslutning.php");
	exit();
	} 
	else { 
	//header("location: ../Inc/elev_evaluering.php");
	echo "Kære";
	echo $user;
	echo ", du bliver desværre nød til at kalde på din lærer";
	
}

//print_r ($_POST);


?>