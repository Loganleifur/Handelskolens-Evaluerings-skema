<link href="Inc/Style.css">
<?php 
require "DB.php";
if (isset($_SESSION['u_user'])) {
$sql = "SELECT Elevid, svar1, svar2, svar3, svar4, svar5, svar6, svar7, svar8, svar9, svar10, bemaerkning FROM besvarelser"; 
 if ($result = $conn->query($sql)) {
 		// du skal bare virke, du får ikke et valg
} else {
		echo ("Error description: " . mysqli_error($conn));
}



if($result->num_rows > 0) {
	echo "<table id='search' class='table'  bordered='1'><tr>
		<th>ID</th>
		<th>besvarelse1</th>
		<th>besvarelse2</th>
		<th>besvarelse3</th>
		<th>besvarelse4</th>
		<th>besvarelse5</th>
		<th>besvarelse6</th>
		<th>besvarelse7</th>
		<th>besvarelse8</th>
		<th>besvarelse9</th>
		<th>besvarelse10</th>
		<th>bemaerkning</th>";
	while($row = $result->fetch_assoc()) {
		
		echo "<tr class='adminTable'>
			<td>" . $row["Elevid"]. "</td>
			<td>" . $row["svar1"]. "</td>
			<td>" . $row["svar2"]. "</td>
			<td>" . $row["svar3"]. "</td>
			<td>" . $row["svar4"]. "</td>
			<td>" . $row["svar5"]. "</td>
			<td>" . $row["svar6"]. "</td>
			<td>" . $row["svar7"]. "</td>
			<td>" . $row["svar8"]. "</td>
			<td>" . $row["svar9"]. "</td>
			<td>" . $row["svar10"]. "</td>
			<td>" . $row["bemaerkning"]. "</td>
		<td>" .  "<input type='hidden' name='hold' value='" . $row["bemaerkning"] . "'></td>";			
	}	
	}
}
?>