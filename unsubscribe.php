<?php

    include_once('./database.php');

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $token = $_POST['token'];

        $query = "select * from users where email = '$email' and token = '$token'";
        $result = $connection->query($query);

        if($result->num_rows == 1){

            $query = "update users set active = 0 where email = '$email'";
            if($connection->query($query)){
                $_SESSION['success'] = "Email unsubscribed";
                header('Location: index.php');
            }else{
                $_SESSION['error'] = "Error: " . $connection->error;
                header('Location: index.php');
            }

        }else{

            $_SESSION['error'] = "Invalid operation ";
            header('Location: index.php');

        }
        
    }else{
        $_SESSION['error'] = "Invalid Access to script";
        header('Location: index.php');
    }