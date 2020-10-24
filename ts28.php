<?php
define('USER_LIST', __DIR__ . '/users.csv');
define('UPLOAD_DIR', __DIR__ . '/uploads/');

$name = $_POST['name'];
$phone = $_POST['phone'];
$file = fopen(USER_LIST, "r");
$n = 0;
while ($line = fgets($file)) {
    $n++;
}
$data = file_get_contents(USER_LIST);
if (!$data) {
    $data .= "№;Имя;Телефон;\"Время добавления\"";
}
$data .= "\r\n$n;$name;$phone;\"" . date('d.m.Y H:i:s') . "\"";
file_put_contents(USER_LIST, $data);

if ($_FILES) {
    foreach ($_FILES as $single_file) {
        $file_name = UPLOAD_DIR . '/' . time() . $single_file['name'];
        move_uploaded_file($single_file['tmp_name'], $file_name);
    }
}
