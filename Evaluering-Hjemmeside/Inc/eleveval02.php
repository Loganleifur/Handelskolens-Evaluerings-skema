<link href="Inc/Style.css">
<?php

require 'DB.php';

$user = $_SESSION['e_user']; 
?>
<head>
		<meta charset="utf-8">
		<style>
		table, th, td {
		border: 1px solid black;
		text-align: center;
		center;
		}
	</style>
</head>
<br>

<h1> Velkommen <?php echo $user; ?> </h1>

<br>

<h1>
	<a href=""><button onclick="ChangeText('Matematik');" value='Matematik'>Matematik</button></a>
	<a href=""><button onclick="ChangeText('Engelsk');" value='Engelsk'>Engelsk</button></a>
	<a href=""><button onclick="ChangeText('Dansk');" value='Dansk'>Dansk</button></a>
	<a href=""><button onclick="ChangeText('Samfundsfag');"value='Samfundsfag'>Samfundsfag</button></a>
	<a href=""><button onclick="ChangeText('Organisation');"value='organisation'>Organisation</button></a>
	<a href=""><button onclick="ChangeText('<?php echo utf8_encode("Erhvervsøkonomi");?>');"value='erhvervsøkonomi'><?php echo utf8_encode("Erhvervsøkonomi");?></button></a>

</h1>
<br>


<h2 style="text-align:center;" id="FagTitel"> </h2>

<form action="Inc/Evaluation.php" method="post">
<input name="hiddendata" id="hiddendata" style='display: none;'> </input>

<h3> 
Fagligt
</h3> 

<table class="adminTable" style="width:80%" >
	<tr>
		<th style="background-color:red;">1</th>
		<th style="background-color:#ff6600;">2</th>
		<th style="background-color:orange;">3</th>
		<th style="background-color:#ffcc00;">4</th>
		<th style="background-color:#ffee00;">5</th>
		<th style="background-color:yellow;">6</th>
		<th style="background-color: #ccff33">7</th> 
		<th style="background-color: #99ff33">8</th>
		<th style="background-color:lime;">9</th>
	</tr>
		<td><input type="radio" name="Fagligt" value="1"></td>
		<td><input type="radio" name="Fagligt" value="2"></td>
		<td><input type="radio" name="Fagligt" value="3"></td>
		<td><input type="radio" name="Fagligt" value="4"></td>
		<td><input type="radio" name="Fagligt" value="5"></td>
		<td><input type="radio" name="Fagligt" value="6"></td>
		<td><input type="radio" name="Fagligt" value="7"></td>
		<td><input type="radio" name="Fagligt" value="8"></td>
		<td><input type="radio" name="Fagligt" value="9"></td>
	</table>
<br>

<h3> Arbejdsindsats </h3>

<table style="width:80%">
	<tr>
		<th style="background-color:red;">1</th>
		<th style="background-color:#ff6600;">2</th>
		<th style="background-color:orange;">3</th>
		<th style="background-color:#ffcc00;">4</th>
		<th style="background-color:#ffee00;">5</th>
		<th style="background-color:yellow;">6</th>
		<th style="background-color: #ccff33">7</th> 
		<th style="background-color: #99ff33">8</th>
		<th style="background-color:lime;">9</th>
	</tr>
		<td><input type="radio" name="Arbejdsindsats" value="1"></td>
		<td><input type="radio" name="Arbejdsindsats" value="2"></td>
		<td><input type="radio" name="Arbejdsindsats" value="3"></td>
		<td><input type="radio" name="Arbejdsindsats" value="4"></td>
		<td><input type="radio" name="Arbejdsindsats" value="5"></td>
		<td><input type="radio" name="Arbejdsindsats" value="6"></td>
		<td><input type="radio" name="Arbejdsindsats" value="7"></td>
		<td><input type="radio" name="Arbejdsindsats" value="8"></td>
		<td><input type="radio" name="Arbejdsindsats" value="9"></td>
	</table>
<br>
<textarea id="textarea" name="textarea" rows="4" cols="50"></textarea>
<br>
<button type="submit" class="but not_login" name="knap" method="post">Gem</button>
</form>

<script>

function ChangeText(Fag){
	event.preventDefault()
	document.getElementById("FagTitel").innerHTML = Fag;
	document.getElementById("hiddendata").value = Fag;
}

</script>