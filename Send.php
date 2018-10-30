<?php

session_start();

include 'Config.php';
$msg=$_POST['msg'];
$name = $_SESSION['name'];  

$sql= "insert into message(msg,name) values('$msg','$name')";

$result = $conn-> query($sql);
    
header("Location:home.php");

?>