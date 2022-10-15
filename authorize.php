<?               
 session_start();
 ?>
 
<html>

<head>
</head>
<title>Аутентификация</title>

<body>
    <?
    

    require __DIR__ . '/connection.php';
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = "SELECT * FROM user WHERE name = '$name'";
        $result = mysqli_query($connection, $query);
        $result = $result->fetch_array();
        if ($result == NULL) {
            echo 'Пользователя с таким именем и паролем нет!';
        } else {
            if ($password == $result['password']) {
                echo "Добро пожаловать! <a href = 'home.php' class='btn btn-lg btn-primar'>Главная страница</a>";
                $_POST[$_SESSION['isAuthorized'] = 1];             // начинаем сессию
                $_SESSION['logged_in_user_id'] = $result['id'];            // инициализируем переменные сессии
                $_SESSION['logged_in_user_name'] = $result['name'];
            } else {
                echo 'Пользователя с таким именем и паролем нет!';
            }
        }
        
        exit;
    }; ?>
    <div align=center>
        <form class="form-signin1" method="post" action="">
            <input type="text" name="name"><label for="login">Логин</label></input>
            <br>
            <input type="password" name="password"><label for="password">Пароль</label></input>
            <br>
            <input type="submit" value="Войти"></input>
        </form>
    </div>
</body>

</html>