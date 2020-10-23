<?php
/**
 * @param сторка $name(Имя)  
 * @return переадресует на страницу thanks (при заполненном варианте), либо возвращает эту же страницу, для записи Имя
 */
$name = $_GET['name'];

function returnSuccess($name){
        if (empty($name)) {
            header('location: /index.php');
       } else {
    header('location: /thanks.php?name=' . $name );
         }
}
returnSuccess($name);