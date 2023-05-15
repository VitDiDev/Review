<?php
session_start();

require_once('../../api/connection.php');
if (isset($_REQUEST["id"]) && $_REQUEST["id"]){
    $id = $_REQUEST["id"];
    $sql = "SELECT * FROM music WHERE id = $id";

    $result = mysqli_query($dbCon, $sql);

    if (mysqli_num_rows($result) > 0) {
            $sql = 'UPDATE music Set status = 2  WHERE id = '.$id;
            $result = $dbCon->query($sql);
            $dbCon-> close();

            if($result) {
                $_SESSION["success"] = "Xoá thành công.";
                header("Location: ./quanlykhonhac.php");
                exit();
            } else {
                $_SESSION["error"] = "Lỗi khi xóa bài hát.";
                $dbCon-> close();
                header("Location: ./quanlykhonhac.php");
                exit();
            }       
        }
}
$dbCon-> close();
header("Location: ./quanlykhonhac.php");

?>