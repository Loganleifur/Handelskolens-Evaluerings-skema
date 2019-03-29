<?php
header('Content-Type: text/html; charset=utf-8');

require 'DB.php';

$user = $_SESSION['u_user']; 

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
	<a href=""><button onclick="ChangeText('Organisation');"value='Organisation'>Organisation</button></a>
	<a href=""><button onclick="ChangeText('<?php echo utf8_encode("Erhvervsøkonomi");?>') "value='erhvervsøkonomi'><?php echo utf8_encode("Erhvervsøkonomi");?></button></a>

</h1>
<br>


<h2 style="text-align:center;" id="FagTitel"> </h2>

<form action="VisBesvarelser.php" method="post">
<input name="hiddendata" id="hiddendata" style='display: none;'> </input>

<br>

<button type="submit" class="but not_login" name="knap" method="post">GO</button>
</form>

<script>

function ChangeText(Fag){
	event.preventDefault()
	document.getElementById("FagTitel").innerHTML = Fag;
	document.getElementById("hiddendata").value = Fag;
}

</script>
