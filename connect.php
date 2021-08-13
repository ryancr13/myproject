<?php
$server_name="localhost";
$user_name="root";
$password="";
$Db_name="crud_players";
$conn = mysqli_connect($server_name,$user_name,$password,$Db_name);
if (!$conn){
    die("failed to connect to mysql" . mysqli_error());  
}

?>