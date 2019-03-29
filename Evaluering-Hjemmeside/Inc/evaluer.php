<div class="layout">
        <div class="main">
            <h2 class="center">Evaluering</h2>
<div>
    <form class="admin" action="Inc/class.php" method="POST">
            <input class="name" type="text" name="class" placeholder="Lave klasse">
                    <button class="bot" type="submit" name="save" >Save</button>
    </form>
    </div>
    <br>
    <div>
            <?php
$sql = "SELECT class.* FROM class";
if($result = $conn->query($sql)){
   // echo "success";
}else{
    echo("Error description: " . mysqli_error($conn));
}
if ($result->num_rows > 0) {
    echo "<table id='search' class='table'  bordered='1'><tr><th>ID</th><th>Klasse/hold</th><th></th><th>Uge 1 til 4</th><th>Uge 1 til 7</th><th>Uge 1 til 10</th><th>Profil</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><form class='admin' action='Inc/tjek.php' method='POST'>
		<td>" . $row["id"]. "</td>
		<td>" . $row["class"]. "</td>
		<td>" .  "<input type='hidden' name='hold' value='" . $row["class"] . "'></td>
        </td><td>". 
		"<button class='but2' name='uge4' type='submit'> Evaluer". "</button></td><td>". 
		"<button class='but2' name='uge7' type='submit'> Evaluer". "</button></td><td>". 
		"<button class='but2' name='uge10' type='submit'> Evaluer". "</button></td><td>". 
		"<button class='but2' name='evaluer' type='submit'> Profil". "</button></td></form>
		</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

        
        </div>
        <div class="side" >

        </div>
        </div>
</div>