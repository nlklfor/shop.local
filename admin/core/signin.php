<?php

    session_start();
    require_once '../includes/connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $chek_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND password = '$password'");

    if(!$_SESSION['is_logged']){
        if(mysqli_num_rows($chek_user) > 0){
            $user = mysqli_fetch_assoc($chek_user);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "name" => $user['name'],
                "login" => $user['login'],
                "email" => $user['email'],
            ];
            header('Location: ../../index.php');
            $_SESSION['is_logged'] = true;
        }
        else{
            $_SESSION['message'] = 'Invalid login or password';
            header('Location: ../../log.php');
        }
    }
    else{
        $_SESSION['message'] = 'You Already Logged in';
        header('Location: ../../log.php');
    }



    //echo mysqli_num_rows($chek_user);


?>