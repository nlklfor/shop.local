<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Log</title>
</head>
<body>
<section class="section-registration section-registration--active">
        <div class="section-inner">
            <form action="./admin/core/signin.php" method="post" class="login-form">
                <label for="">Login</label>
                <input name="login" type="text" placeholder="Type Your Login">
                <label for="">Password</label>
                <input name="password" type="password" placeholder="Type Your Password">
                <button type="submit">Login</button>
                <p>
                    Don't have an account?
                    <a href="./registration.php">Create</a>
                </p>
                <p class="msg">
                    <?php
                        echo($_SESSION['message']); 
                        unset($_SESSION['message']);
                    ?>
                </p>
            </form>
        </div>
    </section>
</body>
</html>
