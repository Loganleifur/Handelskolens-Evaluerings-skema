<?php
session_start();
require 'DB.php';
if (isset($_POST['uge4'])) {
    $class = mysqli_real_escape_string($conn, $_POST['hold']);
    $_SESSION['uge'] = "1 til 4";
    $_SESSION['c_class'] = $class;

    header("location: ../Evaluering.php?input=Success");
}elseif (isset($_POST['uge7'])){
    $class = mysqli_real_escape_string($conn, $_POST['hold']);
    $_SESSION['uge'] = "1 til 7";
    $_SESSION['c_class'] = $class;

    header("location: ../Evaluering.php?input=Success");

}elseif (isset($_POST['uge10'])){
    $class = mysqli_real_escape_string($conn, $_POST['hold']);
    $_SESSION['uge'] = "1 til 10";
    $_SESSION['c_class'] = $class;

    header("location: ../Evaluering.php?input=Success");

}elseif (isset($_POST['hold'])){

    header("location: ../Profil.php?input=Success");

}else{
    header("location: ../Profil.php");
    exit();
}
    ?>