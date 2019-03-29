<?php

$servername = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "evaluer";
$output = '';


$conn = mysqli_connect ($servername, $dbusername, $dbpass, $dbname);

if (!$conn) {
    die("Kunne ikke logge ind: ".mysqli_connect_error());
}

?>