<!--Milan Raut
    Roll:201420-->

<?php

include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";

    $res = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($res);

    if($data["username"] == $username){

        echo "Username already exists";

    } else {
        $hashed_password = md5($password);

        $sql = "INSERT INTO users (username, email, pass) VALUES ('$username', '$email', '$hashed_password')";
        mysqli_query($conn, $sql);

        header("Location: login.php");
    }
    
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login/Registration</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="formItem">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required />
        </div>
        <div class="formItem">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required />
        </div>
        <div class="formItem">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required />
        </div>
        <div class="formItem">
            <input type="submit" value="Register">
        </div>
        <p>Already a member? <a href="login.php">Login here</a></p>
    </form>
</body>
</html>