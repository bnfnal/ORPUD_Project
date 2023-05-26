<?php

require_once('connect_db.php');

$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

if (empty($surname) || empty($name) || empty($address) || empty($phone) || empty($email) || empty($password) || empty($repeat_password)){
    $fail = "Заполните все поля";
}
else{
        $sql1 = "SELECT * FROM `users` WHERE email = '$email'";
        $result = $conn->query($sql1);

        if ($result->num_rows > 0)
        {
            $fail = "Пользователь с таким email уже существует";
        }
        else {
            if ($password != $repeat_password){
                $fail = "Пароли не совпадают";
            }
            else{
                $sql = "INSERT INTO `users` (surname, name, patronymic, gender, birthday, address, phone, email, password, comments) VALUES ('$surname', '$name', '$patronymic', '$gender', '$birthday', '$address', '$phone', '$email', '$password', NULL)";
                if ($conn -> query($sql) === TRUE){
                    $success = "Успешная регистрация";
                }
                else{
                    $fail = "Ошибка: " . $conn->error;
                }
            }
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="phone_mask.js"></script>
    <script src="email_mask.js"></script>
</head>

<body>
    <div class="form">
        <h1>Регистрация</h1>
        <form action="registration_data.php" method="post">

            <div class="input-form">
                <input type="text" placeholder="Фамилия" name="surname" value=<?php if (isset($surname)){ echo $surname;}?>>
            </div>
            <div class="input-form">
                <input type="text" placeholder="Имя" name="name" value=<?php if (isset($name)){ echo $name;}?>>
            </div>
            <div class="input-form">
                <input type="text" placeholder="Отчество" name="patronymic" value=<?php if (isset($patronymic)){ echo $patronymic;}?>>
            </div>
            <div class="radio">
                    <label id="g">Пол</label>
                    <input type="radio" name="gender" value="м" id="м" checked>
                    <label for="м">м</label>
                    <input type="radio" name="gender" value="ж" id="ж">
                    <label for="ж">ж</label>
            </div>
            <div class="input-form">
                <input type="date" placeholder="Дата рождения:" name="birthday" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Адрес" name="address" value=<?php if (isset($address)){ echo $address;}?>>
            </div>
            <div class="input-form">
                <input type="tel" class="phone_mask" placeholder="Номер телефона" name="phone">
            </div>
            <div class="input-form">
                <input type="text" id="email_mask" placeholder="Еmail" name="email">
            </div>
            <div class="password">
                <input type="password" id="password-input" placeholder="Пароль" name="password" value=<?php if (isset($password)){ echo $password;}?>>
                <a href="#" class="password-control"></a>
            </div>
            <div class="password">
                <input type="password" id="password-input" placeholder="Повторите пароль" name="repeat_password" value=<?php if (isset($repeat_password)){ echo $repeat_password;}?>>
                <a href="#" class="password-control"></a>
            </div>

            <div class="error"><?php if (isset($fail)){ echo $fail;}?></div>

            <div class="input-form">
                <input type="submit" value="Зарегистрироваться">
            </div>

            <?php if (isset($success)){?> <script>document.location.href="login.php"</script><?php }?>

        </form>

    </div>

    <script src="phone_mask.js" type="text/javascript" ></script>

    <script>
$('.phone_mask').mask('+7 (999) 999-99-99');

        $.fn.setCursorPosition = function(pos) {
            if ($(this).get(0).setSelectionRange) {
                $(this).get(0).setSelectionRange(pos, pos);
            } else if ($(this).get(0).createTextRange) {
                var range = $(this).get(0).createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
        };


        $('input[type="tel"]').click(function(){
            $(this).setCursorPosition(4);  // set position number
        });
    </script>

    <script>
$(document).ready(function(){
    $("#email_mask").inputmask("email")
        });
    </script>

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



