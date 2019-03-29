<?php 
session_start();
require 'DB.php';
$user = $_SESSION['e_user'];
$id = $_SESSION['UserID'];
mysqli_set_charset($conn,"utf8");

if (isset($_POST['knap'])){
	$Fag = $_POST['hiddendata'];
	
	
	$fagligt = mysqli_real_escape_string($conn, $_POST['Fagligt']);
	$arbejdsindsats = mysqli_real_escape_string($conn, $_POST['Arbejdsindsats']);
	$Kommentar = mysqli_real_escape_string($conn, $_POST['textarea']);

	//Gider ikke gemme nye besvarelser
	$sql = "INSERT INTO $Fag (ID, ElevID, Fagligt, Arbejdsindsats, Kommentar)
	VALUES ('$id', '$id', '$fagligt', '$arbejdsindsats', '$Kommentar');";
	
	echo $sql;
	

	mysqli_query($conn, $sql);
	echo '<br>';
	echo $Fag;
	echo " Jeg burde virke :3";
	//Fjern kommentar felterne når der her faktisk virker
	//header("location: ../ElevEval.php");
	//exit();
} 
else { 
	
	echo "Hey ";
	echo $user;
	echo "Plot twist, Jeg virker ikke :3";
	
}
?>