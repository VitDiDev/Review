<?php
session_start();

require_once('../../api/connection.php');

if (!isset($_POST['name']) || !isset($_POST['phone']) || !isset($_POST['email']) || !isset($_POST['id'])) {
    $_SESSION["error"] = "Parameters not valid.";
    header("Location: ./index.php");
    exit();
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$id = $_POST['id'];

$sql = 'Update users set name = "'.$name.'", phone = "'.$phone.'", email ="'.$email .'" where id = '.$id;
$result = $dbCon->query($sql);
$dbCon->close();
if($result) {
    $_SESSION["success"] = "Sửa thông tin thành công.";
    header("Location: ./index.php");
    exit();
} else {
    $_SESSION["error"] = "Lỗi khi sửa thông tin.";
    header("Location: ./index.php");
    exit();
}       

 


