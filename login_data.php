<?php

require_once('connect_db.php');

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)){
    $fail = "Заполните все поля";
} else {
    $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc()){
            $success = "Добро пожаловать, " .$row['name'];
        }
    }
    else{
        $fail = "Неверный email или пароль";
    }
}
?>

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
                <input type="text" placeholder="email" name="email" value=<?php if (isset($email)){ echo $email;}?>>
            </div>
            <div class="password">
                <input type="password" id="password-input" placeholder="пароль" name="password" value=<?php if (isset($password)){ echo $password;}?>>
                <a href="#" class="password-control"></a>
            </div>
            <div class="error"><?php if (isset($fail)){ echo $fail;}?></div>
            <div class="input-form">
                <input type="submit" name="entry" value="Войти">
            </div>
            <?php if (isset($success)){?> <script>document.location.href="main.php"</script><?php }?>
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

