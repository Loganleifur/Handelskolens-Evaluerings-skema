<?php
session_start();
require 'DB.php';
$user = $_SESSION['e_user'];



?>
<form action='LEval.php' method='post'>
<?php
$sql = "SELECT elev.Matematik, elev.dansk, elev.Engelsk, elev.firstname, elev.lastname, elev.ID FROM elev";

	$result = mysqli_query($conn, $sql);

	$resultcheck = mysqli_num_rows($result);
	
	if($resultcheck > 0) {
	while ($row = mysqli_fetch_array($result)) {
		if($row['Matematik'] == 'Nej') { 
			echo " " . $row['firstname'] . " " . $row['lastname'] ." har ikke Matematik <br>  ";
		}
		else {
			echo " " . $row['firstname'] . " " . $row['lastname'] . " Matematik: " . $row['Matematik'] ." <button name='Matematik' type='submit'>Evaluer</button> <br>";
		}
		if($row['dansk'] == 'Nej') {
			echo "<form> ". $row['firstname'] ." " . $row['lastname'] . " har ikke Dansk <br>";
		}
		else {
			echo "<div>" . $row['firstname'] . " " . $row['lastname'] . " Dansk: " . $row['dansk'] ." <button name='Dansk' type='submit'>Evaluer</button> <br>";
		}
		if($row['Engelsk'] == 'Nej') {
			echo " ". $row['firstname'] . " " . $row['lastname'] . "  har ikke Engelsk <br>";
		}
		else {
			echo "<div>" . $row['firstname'] . " " . $row['lastname'] . " Engelsk: " . $row['Engelsk'] ." </div>";
		}

		echo "<br>";
		
	}
}
else {
		echo ("Error description: " . mysqli_error($conn));
}
?>
</form>
