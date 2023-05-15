<?php
session_start();
if (isset($_COOKIE["username"]) && isset($_COOKIE["email"]) && isset($_COOKIE["phone"])) {
    $name = $_COOKIE["username"];
    $email = $_COOKIE["email"];
    $phone = $_COOKIE["phone"];
    setcookie("username", $name, time() + 1800, "/");
    setcookie("email", $email ,time() + 1800, "/");
    setcookie("phone", $phone, time() + 1800, "/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./img/logo-dark.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <header class="header">
        <div class="home">
            <a class="home-link" href="../Trangchu/" style="text-decoration: none;">
                <img class="home-img" src="./img/logo-dark.png" alt="">
                <p class="home-back">Home</p>
            </a>

        </div>
        <div class="container justify-content-between
          justify-content-end">
            <div class="header__search d-md-flex d-none">
                <div class="header__search-control">
                </div>
                <div class="header__search-box d-md-flex d-none">
                    <label for="header-search"><i class="fa-solid
                  fa-magnifying-glass"></i></label>
                    <input id="header-search" type="text" placeholder="Tìm kiếm
                bài hát, nghệ sĩ, lời bài hát..." />
                </div>
            </div>
            <div class="header-option">
                <div class="header-setting">
                    <i class="fas fa-cog header-icon"></i>
                </div>
                <div class="header__user">
                    <img src="./img/user/0.jpg" alt="" class="header__user-img">
                    <p class="header_user-name"><?php
                                                if (isset($_COOKIE["username"])) {
                                                    echo $_COOKIE["username"];
                                                } else {
                                                    echo "account";
                                                }
                                                ?></p>
                    <ul class="header__user-list">
                        <li class="header__user-item" id="logout-link"><a href="../login/">Log out</a></li>
                        <li class="header__user-item"><a href="../uploadmusic/">Upload
                                song</a></li>
                        <li class="header__user-item"><a href="./index.php">My Profile</a></li>
                        <li class="header__user-item" style=" <?php
                                                                if (!(isset($name) && $name == "admin")) {
                                                                    echo "display:none;";
                                                                }
                                                                ?>"><a href="../Admin/Account/">Admin</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="infor">
        <div class="infor-container">
            <table class="infor-table" border="1">
                <tr class="infor-rows">
                    <td class="infor-user1">Username</td>
                    <td class="infor-user"> <?php
                                            if (isset($_COOKIE["username"])) {
                                                echo $_COOKIE["username"];
                                            } else {
                                                echo "account";
                                            }
                                            ?>
                </tr>
                <tr class="infor-rows">
                    <td class="infor-user1">Email</td>
                    <td class="infor-user"><?php
                                            if (isset($_COOKIE["email"])) {
                                                echo $_COOKIE["email"];
                                            } else {
                                                echo "No email";
                                            }
                                            ?>
                    </td>
                </tr>
                <tr class="infor-rows">
                    <td class="infor-user1">Phone number</td>
                    <td class="infor-user"><?php
                                            if (isset($_COOKIE["phone"])) {
                                                echo $_COOKIE["phone"];
                                            } else {
                                                echo "No number";
                                            }
                                            ?></td>
                </tr>
            </table>
            <input type="button" value="Sửa thông tin" class="btn" id="btn-edit">
        </div>

        <div class="update-infor" style="display:none">
            <form action="../../api/update_user.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="name" id="username" placeholder="Enter new username !">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter new phone!">
                </div>
                <input type="submit" value="Sửa" class="btn" id="btn">
            </form>
        </div>
    </div>
    <script>
        const btnEdit = document.getElementById("btn-edit");
        const updateInfor = document.querySelector(".update-infor");

        btnEdit.addEventListener("click", function() {
            if (updateInfor.style.display === "none") {
                updateInfor.style.display = "block";
            } else {
                updateInfor.style.display = "none";
            }
        });
    </script>
</body>

</html>