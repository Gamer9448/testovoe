<?php
session_start();
if(isset($_SESSION['logged_in_user_id'])) { 
    echo "Ваша сессия все еще существует. Пройдите на главную страницу <a href = 'home.php' class='btn btn-lg btn-primar'>Главная страница</a>"; 
    }
    else { 
    session_destroy();
    echo "Ваша сессия не существует <a href = 'authorize.php' class='btn btn-lg btn-primar'>Главная страница</a>";
    }
// require('authorize.php');   