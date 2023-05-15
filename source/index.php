<?php
session_start();
if (!isset($_COOKIE["username"])) {
    header("Location: ./page/login/index.php");
}
header("Location: ./page/TrangChu/index.php");
?>