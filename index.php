<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <form action="/ts26.php" method="GET">
        <div><input type="text" name="name" value="<?php echo $_GET['name'] ??  '' ?>"></div>
    <button type="submit">Отправить</button>
    </form>

    <form action="/server.php" method="POST">
        <div><input type="text" name="lastname" value=""></div>
    <div><input type="text" name="phone" value="" placeholder="+79999999999" ></div>
    <button type="submit">Отправить</button>
    </form>

</body>
</html>
