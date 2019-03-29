<?php
session_start();

include 'DB.php';

 if(isset($_POST['elev'])) {

        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $pas = mysqli_real_escape_string($conn, $_POST['pas']);
        
        
        //Error handlers
        //check if input are empty
       
        if (empty($user) || empty($pas)) {
            header("Location: ../Index.php?login=empty");
        exit();
        }else {
            $sql = "SELECT * FROM userelev WHERE username= '$user';";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if ($resultcheck < 1) {
            header("Location: ../Index.php?login=error1");
            exit();
            } else {
                if ($row = mysqli_fetch_assoc($result)) {
                    //De-hashing the password
                    $hashedPassCheck = password_verify($pas, $row['password']);
                    if ($hashedPassCheck == false) {
                    header("Location: ../Index.php?login=error2");
            exit();	
                    } elseif ($hashedPassCheck == true) {
                        $_SESSION['e_user'] = $row['username'];
						$_SESSION['u_user'] = "";
						$_SESSION['UserID'] = $row['id'];
                        header("Location: ../ElevEval.php?login=success");
            exit();
                    }
                }
            }
        }
}else {
header("Location: Index.php?login=error3");
exit();
}?>