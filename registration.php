<?php 
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="section-profile section-registration section-registration--active">
        <div class="section-inner">
            <form action="./admin/core/signup.php" method="post" class="login-form">
                <label for="">Name</label>
                <input name="name" type="text" placeholder="Type your name">
                <label for="">Login</label>
                <input name="login" type="text" placeholder="Type login">
                <label for="">Email</label>
                <input name="email" type="text" placeholder="Type your Email">
                <label for="">Password</label>
                <input name="password" type="password" placeholder="Type password">
                <label for="">Confirm Your Password</label>
                <input name="password_confirm" type="password" placeholder="Confirm password">
                <button type="submit">LogIn</button>
                <p>
                    Don't have an account?
                    <a href="">Create</a>
                </p>
                <p class="msg">
                    <? 
                        echo($_SESSION['message']);
                        unset($_SESSION['message']);
                    ?>
                </p>
            </form>
        </div>
    </section>
</body>
</html>