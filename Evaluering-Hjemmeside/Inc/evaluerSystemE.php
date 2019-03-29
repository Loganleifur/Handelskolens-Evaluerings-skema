<?php 
session_start();
require 'DB.php'
if (isset($_SESSION['e_user'])) {
	$user = $_SESSION['e_user'];
	$class = $_SESSION['c_class'];
	$id = mysqli_real_escape_string($conn, $_POST['Elevid']);
	$svar1 = mysqli_real_escape_string($conn, $_POST['svar1']);
	$svar2 = mysqli_real_escape_string($conn, $_POST['svar2']);
	$svar3 = mysqli_real_escape_string($conn, $_POST['svar3']);
	$svar4 = mysqli_real_escape_string($conn, $_POST['svar4']);
	$svar5 = mysqli_real_escape_string($conn, $_POST['svar5']);
	
$sql = "SELECT id FROM elev WHERE id = '$id'"
}

if (mysqli_query($conn, "INSERT INTO besvarelser (Elevid, svar1, svar2, svar3, svar4, svar5,) VALUES ('$id', '$svar1', '$svar2', '$svar3', '$svar4', '$svar5')")) {
header("location: ../Inc/elev_evalueringside2.php");
exit();
} else {
	echo("Error description: " . mysqli_error($conn));
	header("location: ../Index.php");
	exit();
}
?>
