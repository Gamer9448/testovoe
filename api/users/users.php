<?php
echo "<h1>Страница пользователей</h1>";


$db_host='localhost'; // хост
$db_name='testovoe'; //  бд
$db_user='root'; 
$db_pass='root'; 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//  вывод ошибок  
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); 
$mysqli->set_charset("utf8mb4"); // задаем кодировку

$result = $mysqli->query('SELECT * FROM `user`'); 
while($row = $result->fetch_assoc())// 
{
    echo '<p>Пользователь '.$row['id'].'.  '.$row['name'].'</p>';// выводим данные
}