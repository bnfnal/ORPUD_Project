<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="login.php" method="post">
    <p>ФИО: <input type="text" placeholder="name" name="name"> </p>
    <p>Дата рождения: <input type="text" placeholder="date" name="date"> </p>
    <p>email: <input type="text" placeholder="email" name="email"> </p>
    <p>Пароль:  <input type="text" placeholder="password" name="pass"> </p>
    <p>Повторите пароль: <input type="text" placeholder="repeat password" name="repeatpass"> </p>
    <p> <button type="submit">Зарегистрироваться</button>
</form>


</body>
</html>

<?php

?>
<?php

$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];