<?php
session_start();
require 'DB.php';
if (isset($_POST['admin'])) {
    $users = $_SESSION['l_users'];
	 $first = mysqli_real_escape_string($conn, $_POST['first']);
     $last = mysqli_real_escape_string($conn, $_POST['last']);
     $int = mysqli_real_escape_string($conn, $_POST['int']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $gender = mysqli_real_escape_string($conn, $_POST['gender']);
     $tel = mysqli_real_escape_string($conn, $_POST['tel']);

     if (empty($first) || empty($last) || empty($int)) {
        header("location: ../infoLaere.php?signUp=empty");
        exit();
                }else {
                    $sql = "SELECT * FROM teacher WHERE intialer ='$int';";
                    $result = mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);
                    
                    if ($resultcheck > 0) {
                    header("location: ../infoLaere.php?signUp=usertaken");
                exit();
            } else {
                $sql = "SELECT id FROM admin WHERE username = '$users';";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $laereID = $row['id'];
                    }
                    print_r($laereID );
                } else {
                    echo "0 results";
                }
                        $sql = "INSERT INTO teacher (firstname, lastname, intialer, email, tel, gender, loginId)
                         VALUES ('$first','$last','$int','$email','$tel','$gender','$laereID');";
                       if(mysqli_query($conn, $sql)){
                        echo "success";
                    }else{
                        echo("Error description: " . mysqli_error($conn));
                           }
                        header("location: ../Signup_A.php?signUp=success");
                        exit();
                    }
            } 	
	}else{
        header("location: ../LInfo.php");
        exit();
    }
    ?>