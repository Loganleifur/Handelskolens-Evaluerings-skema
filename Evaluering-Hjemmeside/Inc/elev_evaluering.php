<?php
session_start();
require 'DB.php';
header('Content-Type: text/html; charset=utf-8');

    mb_language('uni'); 
    mb_internal_encoding('UTF-8');
    

 $user = $_SESSION['e_user'];
 //$classID = $_SESSION['class']
 $teacher = $_SESSION['u_user'];
 
 //$sql = "SELECT * FROM elev WHERE classID = '$classID';";

?>
<head>
<meta charset="utf-8">
	<style>
	table, th, td {
	border: 1px solid black;
	text-align: center;
	center;
	}
	button {
	float: right;
	}
	h1 {
		color: #336699;
	}
	</style>

<h1 style="text-align:center;">Evaluering GF2</h1>

</head>

<body>
<form action="besvarelser.php" method="post">
 
<input type="hidden" id="elev" name="elev" value="42">
<h2><u>Elev: <?php echo $user;?>  </u></h2>
<?php //<h2><u>Klasse/fag: <?php 
	
	//fill me up with class data pls
	
	 //</u></h2>
//<h2><u>Underviser: <?php echo $teacher; </u></h2> ?>

<br>
<h2 style="text-align:center;"><u>Elevens egen evaluering - ugerne 1-7</u></h2>
<h2 style="text-align:center;"><u>Hvordan er dit faglige niveau?</u></h2>
<br>
<h3 style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>

<table style="width:80%" align="center" required>
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
		<td><input type="radio" name="valg1" value="1"></td>
		<td><input type="radio" name="valg1" value="2"></td>
		<td><input type="radio" name="valg1" value="3"></td>
		<td><input type="radio" name="valg1" value="4"></td>
		<td><input type="radio" name="valg1" value="5"></td>
		<td><input type="radio" name="valg1" value="6"></td>
		<td><input type="radio" name="valg1" value="7"></td>
		<td><input type="radio" name="valg1" value="8"></td>
		<td><input type="radio" name="valg1" value="9"></td>
	</table>
<br>

<h3 style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>

<table style="width:80%" align="center">
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
		<td><input type="radio" name="valg2" value="1"></td>
		<td><input type="radio" name="valg2" value="2"></td>
		<td><input type="radio" name="valg2" value="3"></td>
		<td><input type="radio" name="valg2" value="4"></td>
		<td><input type="radio" name="valg2" value="5"></td>
		<td><input type="radio" name="valg2" value="6"></td>
		<td><input type="radio" name="valg2" value="7"></td>
		<td><input type="radio" name="valg2" value="8"></td>
		<td><input type="radio" name="valg2" value="9"></td>
	</table>

<br>
<h3 style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>

<table style="width:80%" align="center">

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
		<td><input type="radio" name="valg3" value="1"></td>
		<td><input type="radio" name="valg3" value="2"></td>
		<td><input type="radio" name="valg3" value="3"></td>
		<td><input type="radio" name="valg3" value="4"></td>
		<td><input type="radio" name="valg3" value="5"></td>
		<td><input type="radio" name="valg3" value="6"></td>
		<td><input type="radio" name="valg3" value="7"></td>
		<td><input type="radio" name="valg3" value="8"></td>
		<td><input type="radio" name="valg3" value="9"></td>
	</table>


<br>	
<h3 style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>


<table style="width:80%" align="center" required>

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
		<td><input type="radio" name="valg4" value="1"></td>
		<td><input type="radio" name="valg4" value="2"></td>
		<td><input type="radio" name="valg4" value="3"></td>
		<td><input type="radio" name="valg4" value="4"></td>
		<td><input type="radio" name="valg4" value="5"></td>
		<td><input type="radio" name="valg4" value="6"></td>
		<td><input type="radio" name="valg4" value="7"></td>
		<td><input type="radio" name="valg4" value="8"></td>
		<td><input type="radio" name="valg4" value="9"></td>
	</table>
<br>

<button type="submit" style="align:center;" >Næste side</button>
</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<hr>
<p style="text-align:right">Side 1 af 2</p>
</body> 
</html>
