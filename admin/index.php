<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="../img/waiting.mp4" type="video/mp4">
</video>
<form action="includes/login.php" method="POST" class="auth">
    <h1>Вход в админ панель</h1>
        <div class="pass">
            <label for="var-title" class="form-label">
                Введите Логин
            </label>
            <input type="text" name="login" class="form-control" id="var-title">
        </div>
        <div class="log">
            <label for="var-title" class="form-label">
                Введите Пароль
            </label>
            <input type="password" name="password" class="form-control" id="var-title">
        </div>
        <div class="btn-entr">
            <button type="submit" class="btn btn-primary">
                Войти
            </button>
        </div>
    </form>
</body>
</html>