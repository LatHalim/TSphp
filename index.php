<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="with_file_form" action="/ts28.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name"><br>
        <input type="text" name="phone"><br>
        <input type="file" name="file" id="file_form" accept="image/gif, image/jpeg, image/png"> <br>
        <button type="submit">Отправить</button>
    </form>
    <script src="/jquery.js"></script>
    <script src="/ts28.js"></script>
</body>

</html>