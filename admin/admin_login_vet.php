<?php

    include('config/db_connect.php');
    $error = ['email' => '', 'password' => ''];
    $email = "";
    $password = "";
    session_start();
    

    if (isset($_POST['submit'])) {

        if (empty($_POST['email'])) {
         $error['email'] = 'Please enter your email address';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
               $error['email'] = 'Please enter a valid email address';
            } else {
                $email = htmlspecialchars( $_POST['email']);
                
            }

        if (empty($_POST['password'])) {
            $error['password'] = 'Please enter your password';
        } else {
            $password = htmlspecialchars($_POST['password']);
        }

        if (!array_filter($error)) {
            $stmt = $conn->prepare("SELECT * FROM proxima WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $db_password = $row['password'];
                if ($db_password === $password) {
                   $_SESSION["email"] = $email;
                //    $_SESSION["login"] = true;
                    header("Location: admin_page.php");
                    exit();
                    } else {
                        $error['login'] = 'Incorrect password';
                    }
            }else {
                $error['login'] = 'You are not a registered user! Please sign-up';
            }
            if ($result) {
           mysqli_free_result($result);
           mysqli_close($conn);
        }
        }

        
        
        }
             
    // }

    
    // else echo 'there is an error in the form';
    
?>