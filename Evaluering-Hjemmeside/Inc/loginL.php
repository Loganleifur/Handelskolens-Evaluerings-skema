<?php
session_start();

include 'DB.php';

if(isset($_POST['laere'])) {

$users = mysqli_real_escape_string($conn, $_POST['users']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);


//Error handlers
//check if input are empty

if (empty($users) || empty($pass)) {
    header("Location: ../Index.php?login=empty");
exit();
}else {
    $sql = "SELECT * FROM admin WHERE username= '$users';";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck < 1) {
    header("Location: ../Index.php?login=error1");
    exit();
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            //De-hashing the password
            $hashedPassCheck = password_verify($pass, $row['password']);
            if ($hashedPassCheck == false) {
            header("Location: ../Index.php?login=error2");
    exit();	
            } elseif ($hashedPassCheck == true) {	
                $_SESSION['u_user'] = $row['username'];
				$_SESSION['e_user'] = "";
                $_SESSION['admin'] = $row['admin_control'];
                header("Location: ../Admin.php?login=success");
    exit();
            }
        }
    }
}
}else {
header("Location: Login.php?login=error3");
exit();
} 
?>