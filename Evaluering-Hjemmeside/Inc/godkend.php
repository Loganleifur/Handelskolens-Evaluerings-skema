<?php
session_start();
require 'DB.php';
$class = $_SESSION['l_class'];

$sql = "INSERT INTO class (class) VALUES ('$class');";
echo $sql;
?>
<head>
<meta charset="utf-8">
</head>
<p> Du har nu lavet klassen:"<?php echo $class; ?>"</p> 
<p> Din klasse er nu blevet gemt.</p>
<button class='but' action="Admin.php">Tilbage</button>


