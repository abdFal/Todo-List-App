<?php
include ('config.php');

$data = $_POST['Data'];
mysqli_query($connect, "INSERT INTO list (Data_list) VALUES('$data')");
header("location:index.php");