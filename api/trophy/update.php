<?php
$connection = mysqli_connect("127.0.0.1","root","root","testovoe",);
$count = $_POST['count'];
$id = $_GET['id'];

$update = "UPDATE trophy SET count='{$count}' WHERE id=1";
// var_dump($update);
// exit;
   $result = mysqli_query($connection,$update);
?>

<p><h3><strong>Редактировать</strong></h3></p> 
     <form action="" class="form-signin" method="POST"> 
    <input type="text" name="count" placeholder = "Введите количество трофеев">
    <input type="submit" name="but" value="Редактировать">
