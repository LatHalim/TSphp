<?php 
if (!isset($_GET['name'])){
    header('location: /index.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <style>
        .text {
            font-size: 100px;
            text-align: center;
        }
    </style>
    <p class="text"> Спасибо, <?php echo $_GET['name'] ?> , мы свяжемся с вами в ближайшее время!</p>
    <a href="http://localhost/index.php"><button>Вернуться на главную</button></a>
</body>
</html>


