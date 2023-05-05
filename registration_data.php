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
    echo "Заполните все поля";
}
else{
        $sql1 = "SELECT * FROM `users1` WHERE email = '$email'";
        $result = $conn->query($sql1);

        if ($result->num_rows > 0)
        {
            echo "Пользователь с таким email уже зарегистрирован";
        }
        else {
            if ($password != $repeat_password){
                echo "Пароли не совпадают";
            }
            else{
                $sql = "INSERT INTO `users1` (surname, name, patronymic, gender, birthday, address, phone, email, password, comments) VALUES ('$surname', '$name', '$patronymic', '$gender', '$birthday', '$address', '$phone', '$email', '$password', NULL)";
                if ($conn -> query($sql) === TRUE){
                    echo "Успешная регистрация";
                }
                else{
                    echo "Ошибка: " . $conn->error;
                }
            }
        }
}




