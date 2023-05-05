<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div class="form">
    <h1>Вход</h1>
    <form action="login_data.php" method="post">
        <div class="input-form">
            <input type="text" placeholder="email" name="email">
            <p id="error">Error message</p>
        </div>
        <div class="password">
            <input type="password" id="password-input" placeholder="пароль" name="password">
            <a href="#" class="password-control"></a>
            <p id="error">Error message</p>
        </div>
        <div class="input-form">
            <input type="submit" value="Войти">
        </div>
    </form>

    <form action="forgot_password.php">
        <div class="forgot">
            <input type="submit" value="Забыли пароль?">
        </div>
    </form>

    <form action="registration.php">
        <div class="input-form">
            <input type="submit" value="Зарегистрироваться">
        </div>
    </form>&nbsp;

</div>

<script>
    $('body').on('click', '.password-control', function(){
        if ($('#password-input').attr('type') == 'password'){
            $(this).addClass('view');
            $('#password-input').attr('type', 'text');
        } else {
            $(this).removeClass('view');
            $('#password-input').attr('type', 'password');
        }
        return false;
    });
</script>

</body>
</html>

<?php