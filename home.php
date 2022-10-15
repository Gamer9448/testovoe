<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>Главная страница</h1>";


$db_host='localhost'; // хост
$db_name='testovoe'; //  бд
$db_user='root'; 
$db_pass='root'; 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//  вывод ошибок  
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); 
$mysqli->set_charset("utf8mb4"); // задаем кодировку

$result = $mysqli->query('SELECT * FROM `trophy` INNER JOIN `user` ON trophy.user_id = user.id and `count` 
 '); 
while($row = $result->fetch_assoc()) 
{
         echo '<p>Айди пользователя '.$row['id'].' </p>';
        echo '<p> Имя пользователя '.$row['name'].' </p>';
        // echo "</br>";
        echo '<p>Количество трофеев '.$row['count'].' </p>';
   
}
?>
</body>
</html>