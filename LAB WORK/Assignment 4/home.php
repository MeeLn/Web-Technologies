<?php

session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Hello
        <?php 
        
        echo $_SESSION["user"]['username']; 
        
        ?>
    
    </h1>
    <a href="logout.php">Log Out</a>
</body>
</html>