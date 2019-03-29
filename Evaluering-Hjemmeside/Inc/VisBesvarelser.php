<link href="Inc/Style.css">
 <meta charset="utf-8">
<?php

require 'DB.php';

$user = $_SESSION['u_user'];
$Fag = $_POST['hiddendata'];



if (isset($_SESSION['u_user'])) {
//$sql = "SELECT id FROM elev INNER JOIN Matematik ON elev.id = Matematik.ID";
$sql = "SELECT ElevID, fagligt, arbejdsindsats, Kommentar FROM $Fag";
//$sql = "SELECT id, firstname, lastname FROM elev FULL OUTER JOIN Matematik ON elev.id = Matematik.ID";
$sql = "SELECT $Fag.ElevID, $Fag.fagligt, $Fag.Kommentar, $Fag.arbejdsindsats, $Fag.ID, elev.id, elev.firstname, elev.lastname FROM $Fag 
LEFT JOIN elev 
ON $Fag.id = elev.id 
ORDER BY $Fag.ID";
if ($result = $conn->query($sql)) {

//virk pls 

} 
else {
	echo ("Error description: " .mysqli_error($conn));
	echo "A wild error has appeard in the code that selects stuff from Matematik! What do you do? 1. Go back and fix it. 2. Cry 3. jump out of the window.";
}


if($result->num_rows > 0) {
	echo "<table id='search' class='table' bordered='1'><tr>
	<th>ID</th>
	<th>Navn</th>
	<th>Fagligt</th>
	<th>Arbejdsindsats</th>
	<th>Kommentar</th>";
	while($row = $result->fetch_assoc()) {
		echo "<tr class='adminTable'>
			<td>" . utf8_encode($row["ID"]). "</td>
			<td>" . utf8_encode($row["firstname"])." ". utf8_encode($row["lastname"])." </td>
			<td>" . $row["fagligt"]. "</td>
			<td>" . $row["arbejdsindsats"]. "</td>
			<td>" . utf8_encode($row["Kommentar"]). "</td>";
			
	}
}
}
exit();
?>