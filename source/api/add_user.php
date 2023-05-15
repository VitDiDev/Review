    <?php
    session_start();

    require_once('connection.php');

    if (!isset($_POST['name']) || !isset($_POST['phone']) || !isset($_POST['email']) || (!isset($_POST['password'])) || (!isset($_POST['confirm_password']))) {
        die(json_encode(array('status' => false, 'data' => 'Parameters not valid')));
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];



    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($dbCon, $sql);
    $user = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) >0) {
        // Người dùng đã tồn tại
        $crypt = md5($password);
        $id = $user["id"];
        if($user["status"]==2){
            if($crypt==$user["password"] && $email==$user["email"]){
                $sql="UPDATE users Set status = 1  WHERE id = $id";
                $result= mysqli_query($dbCon,$sql);
                $_SESSION["error"] = "Đã kích hoạt lại tài khoản thành công.";
                header("Location: ../page/login/index.php");
                exit();
            }
            else{
                $_SESSION["error1"] = "Đăng ký thất bại vui lòng nhập lại thông tin đăng nhập lúc trước để kích hoạt lại tài khoản.";
                header("Location: ../page/signin/index.php");
                exit();
            }
        }
        else if($user["status"]==1){
            $_SESSION["error"] = "Người dùng đã tồn tại!";
            header("Location: ../page/signin/index.php");
            exit();
        }
        
        
        // Xử lý thông báo lỗi hoặc chuyển hướng đến trang đăng nhập lại
    } else {
        // Người dùng chưa tồn tại
        if ($password == $confirm_password) {
            $crypt = md5($password);
            $sql = "INSERT INTO users(name,phone,email,password,country,role,status) VALUES('".$name."', '".$phone."', '".$email."', '".$crypt."',1,1,1)";
            $result = $dbCon->query($sql);
            $dbCon->close();
            if($result) {
                $_SESSION["success"] = "Đăng ký thành công.";
                header("Location: ../page/login/index.php");
                exit();
            } else {
                $_SESSION["error"] = "Lỗi khi thêm người dùng mới.";
                header("Location: ../page/signin/index.php");
                exit();
            }       
        } else {
            $_SESSION["error"] = "Mật khẩu không đúng.";
            header("Location: ../page/signin/index.php");
            exit();
        }
        // Tiếp tục xử lý đăng ký người dùng
    }


