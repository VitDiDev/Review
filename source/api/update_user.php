<?php
session_start();
require_once('connection.php');

if (!isset($_POST['name'], $_POST['phone'])) {
    die(json_encode(array('status' => false, 'data' => 'Parameters not valid')));
}
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_SESSION["email"];

$sql = "UPDATE users SET name = '$name', phone = '$phone' WHERE email = '$email'";
$result = mysqli_query($dbCon, $sql);
setcookie("username", $name, time() + 1800, "/");
setcookie("phone", $phone, time() + 1800, "/");
setcookie("email", $email, time() + 1800, "/");
$_SESSION["email"] = $email;
mysqli_close($dbCon);
header("Location: ../page/profile/");
exit();
?>