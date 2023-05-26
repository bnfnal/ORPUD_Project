<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка снимка</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
    <h1>Снимок</h1>
    <form action="main_data.php" method="post" enctype= multipart/form-data>
        <div class="input-form">
            <input type="file" name="image">
        </div>
        <div class="input-form">
            <input type="submit" value="Загрузить снимок">
        </div>
    </form>

</div>

</body>
</html>

<?php

