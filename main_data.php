<?php
$file = "./".$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $file);
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
        <div class="result"> <img src="<?php echo $_FILES['image']['name']?>" width="400" height="300" alt="image"> </div>
        <div class="result">Результат</div>
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