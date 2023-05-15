
<?php
session_start();
if (isset($_SESSION['id'])) {
    header('Location: ../page/Trangchu/');
    exit;
}
// Kết nối đến cơ sở dữ liệu
require_once('connection.php');


// Kiểm tra nếu có thông tin đăng nhập được gửi từ biểu mẫu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $crypt = md5($password);
    // Kiểm tra tính hợp lệ của email và password tại đây

    // Truy vấn cơ sở dữ liệu để kiểm tra tính đúng đắn của email và password
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$crypt'";
    $result = mysqli_query($dbCon, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row["status"]==2){
        $_SESSION["error1"] = "Tài khoản của bạn đang bị tạm khóa vui lòng đăng ký đúng thông tin để kích hoạt lại tài khoản.";
        // // Chuyển hướng ngược lại trang đăng nhập
        header("Location: ../page/login/");
    }
    // Kiểm tra kết quả truy vấn
    else if (mysqli_num_rows($result) > 0) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($dbCon, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row["name"];
        $role = $row["role"];
        $phone = $row["phone"];
        setcookie("username", $name, time() + 1800, "/");
        setcookie("email", $email ,time() + 1800, "/");
        setcookie("phone", $phone, time() + 1800, "/");
        // Nếu thông tin đúng, chuyển hướng đến trang chính
        if ($role == 1) {
            header("Location: ../page/Trangchu/");
        } else {
            header("Location: ../page/admin/");
        }
        exit();
    } else {
        // // Nếu thông tin sai, hiển thị thông báo lỗi
        $_SESSION["error"] = "Email hoặc mật khẩu không đúng.";
        // // Chuyển hướng ngược lại trang đăng nhập
        header("Location: ../page/login/");
    }
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
?>