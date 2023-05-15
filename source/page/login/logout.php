<?php
    session_start();
    if (isset($_COOKIE["username"])) {
        setcookie("username", "", time()-3600);
    }
    header("Location: ../login/index.php");
?>