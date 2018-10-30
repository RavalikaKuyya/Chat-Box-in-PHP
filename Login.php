<?php

session_start();
include 'Config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql="SELECT * from signup where username = '$uname' and password = '$pass'";
$result = $conn->query($sql);

if(!$row = $result-> fetch_assoc()){
    header("Location:error.php");
}
else{
    
    $_SESSION['name'] =  $_POST['uname'];
    header("Location:home.php");
}