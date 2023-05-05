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
                <input type="text" placeholder="Фамилия" name="surname">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Имя" name="name">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Отчество" name="patronymic">
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
                <input type="text" placeholder="Адрес" name="address">
            </div>
            <div class="input-form">
                <input type="tel" class="phone_mask" placeholder="Номер телефона" name="phone">
            </div>
            <div class="input-form">
                <input type="text" id="email_mask" placeholder="Еmail" name="email">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Пароль" name="password">
            </div>
            <div class="input-form">
                <input type="text" placeholder="Повторите пароль" name="repeat_password">
            </div>
            <div class="input-form">
                <input type="submit" value="Зарегистрироваться">
            </div>
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

</body>
</html>

<?php

