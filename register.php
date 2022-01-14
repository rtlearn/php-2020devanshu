<?php

    include_once('./database.php');

    if(isset($_POST['submit'])){
        $email = $_POST['email'];

        $query = "select * from users where email = '$email'";
        $result = $connection->query($query);

        if($result->num_rows == 0){

            $query = "insert into users(email, token) values('$email', '" . uniqid() . "')";
            if($connection->query($query)){
                $_SESSION['success'] = "User successfully registered for emails";
                header('Location: index.php');
            }else{
                $_SESSION['error'] = "Error: " . $connection->error;
                header('Location: index.php');
            }

        }elseif($result->num_rows == 1){

            $row = $result->fetch_assoc();
            if($row['active'] == 1){

                $_SESSION['error'] = "Email already registered";
                header('Location: index.php');

            }else{

                $query = "update users set active = 1, token = '" . uniqid() . "' where email = '$email'";
                if($connection->query($query)){

                    $_SESSION['error'] = "Email registered";
                    header('Location: index.php');

                }else{

                    $_SESSION['error'] = "Error: " . $connection->error;
                    header('Location: index.php');

                }

            }

            
        }else{
            
            $_SESSION['error'] = "Email already registered";
            header('Location: index.php');

        }
        
    }else{
        $_SESSION['error'] = "Invalid Access to script";
        header('Location: index.php');
    }