<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <h1>Вход</h1>
        <form action="main.php" method="post">
            <div class="input-form">
                <input type="text" placeholder="email" name="email">
            </div>
            <div class="input-form">
                <input type="text" placeholder="password" name="pass">
            </div>
            <div class="input-form">
                <input type="submit" value="Войти">
            </div>
        </form>

        <form action="forgot_passwd.php">
            <div class="forget">
                <input type="submit" value="Забыли пароль?">
            </div>
        </form>

        <form action="register.php">
            <div class="input-form">
                <input type="submit" value="Зарегистрироваться">
            </div>
        </form>

    </div>

</body>
</html>

<?php
