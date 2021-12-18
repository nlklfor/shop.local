<?php

    session_start();
    require_once '../includes/connect.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // $chek_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND password = '$password'");
    // $user = mysqli_fetch_assoc($chek_user);

    if($password === $password_confirm){
        $password = md5($password); 
        mysqli_query($connect, "INSERT INTO users (id, full_name, login, email, password) VALUES (NULL, '$name', '$login', '$email', '$password')");
        header('Location: ../../index.php');
    }
    else{
        $_SESSION['message'] = 'Not Same Passwords';
        header('Location: ../../registration.php');
    }

?>