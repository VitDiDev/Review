<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./img/logo-dark.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="login mx-auto">
        <div class="login-wrap">
            <h3>Log In</h3>
            <form action="../../api/process-login.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-style email" placeholder="email" name="email">
                    <i class="input-icon uil uil-at"></i>
                </div>
                <div class="form-group">
                    <input type="password" class="form-style pwd" placeholder="password" name="password">
                    <i class="input-icon uil uil-lock-alt"></i>
                </div>
                <div class="login-btn">
                    <button class="btn" type="submit">Login</button>
                </div>
                <div class="already">
                    <a href="../signin/index.php" class="btn-alredy">You don't have an account ? Sign In</a>
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