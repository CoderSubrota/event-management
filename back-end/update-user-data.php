<?php
session_start() ;
require_once "./config.php" ;

        //update user data 
        if(isset($_POST['update_user'])) {  
            $user_id = mysqli_real_escape_string($connection,$_POST['hidden_id']) ;
            $full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $password_pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/";
    
            // Check if passwords match
            if ($password !== $confirm_password) {
                    $_SESSION['message']="Error: Passwords do not match!";
                    header("location:../front-end/show_users.php") ; 
            }
            // Check if password meets the strength criteria
            elseif (!preg_match($password_pattern, $password)) {
                   $_SESSION['message']="<ul class='text-info fw-bold'> <li>Password must be at least 8 characters long</li><li>Include an uppercase letter</li><li>Include an lower letter</li><li>Include an lower number</li><li>Include an special character</li></ul>";
                    header("location:../front-end/show_users.php") ; 
            } else{
    
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $update_user = "UPDATE users SET full_name='$full_name', email='$email', user_password='$hash_password' WHERE id='$user_id'";
                if (mysqli_query($connection, $update_user)) {
                    $_SESSION['message'] = "User ". $full_name . " data updated successfully !!" ;
                    header("Location: ../front-end/show_users.php");
                    exit();
                } else {
                    $_SESSION['message']='Error:'. mysqli_error($connection);
                    header("location:../front-end/show_users.php") ; 
                    exit() ;
                   
                }
            }
          }
?>