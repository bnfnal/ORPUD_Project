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
    <div class="form">
        <h1>Регистрация</h1>
        <form action="login.php" method="post">
            <div class="input-form">
                <input type="text" placeholder="Имя" name="name">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Фамилия" name="surname">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Отчество" name="patronymic">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Дата рождения" name="birthday">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Адрес" name="address">
            </div>
            <div class="input-form">
                <input type="text" placeholder="+7 (_ _ _) _ _ _ - _ _ - _ _" name="phone">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Еmail" name="email">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Пароль" name="pass">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Повторите пароль" name="repeatpass">
            </div>
            <div class="input-form">
                <input type="submit" value="Зарегистрироваться">
            </div>
        </form>

        &nbsp;

    </div>

</body>
</html>

<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
