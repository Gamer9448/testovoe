<?php
$connection = mysqli_connect("127.0.0.1","root","root","testovoe",);
if ($mysqli->connect_error) {
    error_log('Ошибка при подключении: ' . $mysqli->connect_error);
}
?>