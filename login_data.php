<?php

require_once('connect_db.php');

$email = $_POST['email'];
$password = $_POST['password'];


if (empty($email) || empty($password)){
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `users1` WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc()){
            echo "Добро пожаловать, " .$row['name'];
        }
    }
    else {
        echo "Неверный email или пароль";
    }
}

?>