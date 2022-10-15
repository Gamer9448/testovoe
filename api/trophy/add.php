<h1>Добавить трофеи пользователю</h1>
<div class="container">
<div class="posts">

<?php

$user_id = $_GET['user_id'];
$connection = mysqli_connect("127.0.0.1","root","root","testovoe",);
$query = "SELECT * FROM `trophy` WHERE user_id='$user_id'";


$result = mysqli_query($connection, $query); 

while ($row = mysqli_fetch_array($result) ) {?>


<div class="post">
</p><?php echo $row['user_id'];?></p>
<h4><?php echo $row['count'];?></h4>


<a href="update.php?id=<?php echo $row['id'];  ?>"><button>Добавить трофеи</button></a>

</div>
<?php } ?>

</div>
</div>

</body>
</html>