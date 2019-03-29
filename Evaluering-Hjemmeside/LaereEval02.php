<div class="layout2">
<form action="Inc/tjek.php" method="post">
<h1>Elev Vurdering</h1>
<h2> Elev liste: </h2>
<?php 




$sql = "SELECT firstname, lastname, classID FROM elev";
	if ($result = $conn->query($sql)) {
 		// du skal bare virke, du får ikke et valg
} 
else {
		echo ("Error description: " . mysqli_error($conn));
}



if($result->num_rows > 0) {
	echo "<table id='search' class='table'  bordered='1'>
		<tr>
			<th>ID</th>
			<th>Klasse/hold</th>
			<th>
			</th>
			<th>Uge 1 til 4</th>
			<th>Uge 1 til 7</th>
			<th>Uge 1 til 10</th>
			<th>Profil</th>
			</tr>";
		while($row = $result->fetch_assoc()) {
		
			echo "<tr><form class='table' action='evaluering.php' method='POST'>
			<td>" . $row["firstname"]. " " . $row["lastname"]. "</td>
			<td>" . $row["classID"]. "</td>
			<td>" .  "<input type='hidden' name='hold' value='" . $row["classID"] . "'></td>
			</td>
			<td>". "<button class='but2' name='uge4' type='submit' value='Matematik'> Evaluer". "</button></td>
			<td>". "<button class='but2' name='uge7' type='submit' value='Engelsk'> Evaluer". "</button></td>     		
			<td>". "<button class='but2' name='uge10' type='submit'>Evaluer". "</button></td>
			<td>". "<button class='but2' name='evaluer' type='submit'> Profil". "</button></td>
			</form>
			</tr>";				
}	
}
?>



<script>

function ChangeText(elev){
	event.preventDefault()
	document.getElementById("FagTitel").innerHTML = elev;
	document.getElementById("hiddendata").value = elev;
}

</script>