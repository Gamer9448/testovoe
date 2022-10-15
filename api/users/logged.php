<h1> Список залогиненных пользователей </h1> 
<?php // Тестовый вариант (Если тестовый вариант попадет в конце в общие файлы,значит я не успел сделать)
session_start();
?>

<?php
if (isset($_SESSION["logged_in_user_id"]) && isset($_SESSION["logged_in_user_name"]))
{
    $id = $_SESSION["logged_in_user_id"];
    $name = $_SESSION["logged_in_user_name"];
    echo "id: $id <br> Name: $name";
     }
?>