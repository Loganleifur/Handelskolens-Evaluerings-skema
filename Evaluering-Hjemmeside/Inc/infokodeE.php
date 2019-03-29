<?php
session_start();
require 'DB.php';
if (isset($_POST['elev'])) {
    $users = $_SESSION['users'];
	 $first = mysqli_real_escape_string($conn, $_POST['first']);
     $last = mysqli_real_escape_string($conn, $_POST['last']);
     $int = mysqli_real_escape_string($conn, $_POST['int']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $select = mysqli_real_escape_string($conn, $_POST['select']);
     $gender = mysqli_real_escape_string($conn, $_POST['gender']);
     $birth = mysqli_real_escape_string($conn, $_POST['birth']);
     $tel = mysqli_real_escape_string($conn, $_POST['tel']);
     $mate = mysqli_real_escape_string($conn, $_POST['matematik']);
     $dan = mysqli_real_escape_string($conn, $_POST['dansk']);
     $erh = mysqli_real_escape_string($conn, $_POST['erhvervsoekonomi']);
     $eng = mysqli_real_escape_string($conn, $_POST['engelsk']);
     $org = mysqli_real_escape_string($conn, $_POST['organisation']);
     $sam = mysqli_real_escape_string($conn, $_POST['samfundsfag']);
	  
     if (empty($first) || empty($last) || empty($int)) {
        header("location: ../infoelev.php?signUp=empty");
        exit();
                }else {
                    $sql = "SELECT * FROM elev WHERE intialer ='$int';";
                    $result = mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);
                    
                    if ($resultcheck > 0) {
                    header("location: ../infoelev.php?signUp=usertaken");
                exit();
            } else {
                $sql = "Select id from userelev where username = '$users' ";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $elevID = $row['id'];
                    }
                    print_r($elevID);
                } else {
                    echo "0 results";
                }
                        $sql = "INSERT INTO elev (firstname, lastname, intialer, email, tel, gender, birthday, classID, matematik, dansk, erhvervsoekonomi, engelsk, organisation, samfundsfag, loginID)
                         VALUES ('$first','$last','$int','$email','$tel','$gender','$birth','$select','$mate','$dan','$erh','$eng','$org','$sam','$elevID');";
                       if(mysqli_query($conn, $sql)){
                        echo "success";
                }else{
                    echo("Error description: " . mysqli_error($conn));
                       }
                       header("location: ../Signup_E.php?signUp=success");
                        exit();
                    }
            } 	
	}else{
        header("location: ElevInfo.php");
        exit();
    }
    ?>