<?php
session_start();
require 'DB.php';
if (isset($_POST['admin'])) {
    $uge =  $_SESSION['uge'];
    $class = $_SESSION['c_class'];
    $users =  $_SESSION['u_user'];
    $fag = mysqli_real_escape_string($conn, $_POST['fag']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $fl = mysqli_real_escape_string($conn, $_POST['faglidt']);
    $arbejde = mysqli_real_escape_string($conn, $_POST['arbejdsindsats']);
    $bemaerk = mysqli_real_escape_string($conn, $_POST['bemaerkning']);
	
	

    $sql = "SELECT id FROM elev WHERE id = '$id'";
	//foreach ($conn->query($sql) as $row) {
		//$initial = $row['id'];	
   //echo $initial;
	
	

	
	//$uge = str_replace("til", "-", $uge);
	
	if (mysqli_query($conn, "INSERT INTO evaluering (classId, fag, læreid, faglidt_niveau, arbejdsindsats, bemaerkning, uge, elevId) 
	VALUES ('$class', '$fag', '$users', '$fl', '$arbejde', '$bemaerk', '$uge', '$id')")) {
		//header("location: ../Valg.php?=success");
		echo "it works, why?";
		exit();
}
}		
else {
    
	echo "It doesn't work, why?";
	echo("Error description: " . mysqli_error($conn));
    //header("location: ../Valg.php?=Failure");
    exit();
}

?>