<!doctype html>
<html lang="en">

<head>
    <title>Sign in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./img/logo-dark.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="login mx-auto">
        <div class="login-wrap">
            <h3>Register</h3>
            <form action="../../api/add_user.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-style" placeholder="Full Name" name="name">
                    <i class="input-icon uil uil-user"></i>
                </div>
                <div class="form-group mt-2">
                    <input type="tel" class="form-style" placeholder="Phone Number" name="phone">
                    <i class="input-icon uil uil-phone"></i>
                </div>
                <div class="form-group">
                    <input type="email" class="form-style" placeholder="Email" name="email">
                    <i class="input-icon uil uil-at"></i>
                </div>
                <div class="form-group">
                    <input type="password" class="form-style" placeholder="Password" name="password">
                    <i class="input-icon uil uil-lock-alt"></i>
                </div>
                <div class="form-group">
                    <input type="password" class="form-style" placeholder="Confirm password" name="confirm_password">
                    <i class="input-icon uil uil-lock-alt"></i>
                </div>
                <div class="register">
                    <button class="btn mt-4" type="submit">register</button>
                </div>
                <div class="already">
                    <a href="../login/index.php" class="btn-alredy">You already have an account ?</a>
                </div>
                <div class="aler">
                    <?php
                    session_start();
                    if (isset($_SESSION["error"])) {
                        echo "<p style='color:red;'>" . $_SESSION["error"] . "</p>";
                        unset($_SESSION["error"]);
                    }
                    if (isset($_SESSION["error1"])) {
                        echo "<p style='color:red;font-size:12px;'>" . $_SESSION["error1"] . "</p>";
                        unset($_SESSION["error1"]);
                    }
                    ?>
                </div>
            </form>


        </div>
    </div>
</body>