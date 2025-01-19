<!--Milan Raut
    Roll:201420-->

<?php

include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    session_start();
    $sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";

    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
        
        $data = mysqli_fetch_assoc($res);
        $_SESSION["user"] = $data;

        header("Location: home.php");

    } else {
        echo "Either Username or Password not Found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="formItem">
            <label for="usernameoremail">Username or Email:</label>
            <input type="text" name="username" id="username" required />
        </div>
        <div class="formItem">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required />
        </div>
        <div class="formItem">
            <input type="submit" value="Login">
        </div>
        <p>New member? <a href="index.php">Register here</a></p>
    </form>
</body>
</html>