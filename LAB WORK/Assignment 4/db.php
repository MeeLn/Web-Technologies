<!--Milan Raut
    Roll:201420 -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "user_registration";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS user_registration";
mysqli_query($conn, $sql);

mysqli_close($conn);


$conn = mysqli_connect($servername, $username, $password, $database);
$table = "CREATE TABLE IF NOT EXISTS users(
    id INT(5) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    email VARCHAR(255),
    pass VARCHAR(255)
)";

mysqli_query($conn, $table);

?>