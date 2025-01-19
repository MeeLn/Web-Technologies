<!--Milan Raut
    Roll:201420-->

<?php

session_start();
session_unset();
session_destroy();
header("Location: login.php")

?>