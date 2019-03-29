<?php
session_start();
require 'DB.php';
if (isset($_POST['elev'])) {
    $class = $_SESSION['l_class'];
     $ML = mysqli_real_escape_string($conn, $_POST['ML']);
     $AL = mysqli_real_escape_string($conn, $_POST['AL']);
     $EL = mysqli_real_escape_string($conn, $_POST['EL']);
     $IL = mysqli_real_escape_string($conn, $_POST['IL']);
     $OL = mysqli_real_escape_string($conn, $_POST['OL']);
     $SL = mysqli_real_escape_string($conn, $_POST['SL']);
     $uge4 = mysqli_real_escape_string($conn, $_POST['1_4']);
     $uge7 = mysqli_real_escape_string($conn, $_POST['1_7']);
     $uge10 = mysqli_real_escape_string($conn, $_POST['1_10']);
     $elever = mysqli_real_escape_string($conn, $_POST['first']);

         $sql = "INSERT INTO classinfo (classid, password) VALUES
         ('$users','$hashedPass');";
         mysqli_query($conn, $sql);
         header("location: ../Evaluering.php?signUp=success");
         exit();
     }
    }
    }else{
        header("location: ../ClassInfo.php");
        exit();
   }
     ?>