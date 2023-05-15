<?php
session_start();

require_once('../../api/connection.php');

if (!isset($_POST['name']) || !isset($_POST['image']) || !isset($_POST['id'])) {
    $_SESSION["error"] = "Parameters not valid.";
    header("Location: ./quanlytheloai.php");
    exit();
}

$name = $_POST['name'];
$image = $_POST['image'];
$id = $_POST['id'];

$sql = 'Update category set name = "'.$name.'", image ="'.$image .'" where id = '.$id;
$result = $dbCon->query($sql);
$dbCon->close();
if($result) {
    $_SESSION["success"] = "Sửa thể loại thành công.";
    header("Location: ./quanlytheloai.php");
    exit();
} else {
    $_SESSION["error"] = "Lỗi khi sửa thể loại.";
    header("Location: ./quanlytheloai.php");
    exit();
}       

 


