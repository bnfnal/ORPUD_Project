<?php
$types = array('png', 'jpg', 'jpeg');
if ($_FILES['image']['size'] > 0){
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    if(in_array($ext, $types)){
        $file = "./image.".$ext;
        move_uploaded_file($_FILES['image']['tmp_name'], $file);
        $res = "Результат";
    }
    else{
        $res = "Недопустимый тип файла";
    }
}
else{
    $res = "Файл не выбран";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
    <h1>Результат</h1>
    <form action="main.php" method="post">
        <div class="result"> <img src="<?php echo $file?>" width="400" height="300" alt="image"> </div>
        <div class="result"><?php echo $res?></div>
        <div class="input-form">
            <input type="submit" value="назад">
        </div>
    </form>

</div>

<script>
    function jupload()
    {
        $(".imageholder").append('<img src="./images/loading.gif">');
    }

    function juploadstop(result)
    {
        if(result==0)
        {
            $(".imageholder").html("");

        }
        // the result will be the path to the image
        else if(result!=0)
        {
            $(".imageholder").html("");
            // imageplace is the class of the div where you want to add the image
            $(".imageplace").append("<img src='"+result+"'>");
        }
    }
</script>
</body>
</html>
