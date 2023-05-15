<?php
session_start();
if (isset($_COOKIE["username"])) {
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Comfpatible" content="IE=edge" />
    <link rel="icon" href="./img/icon-home/MUXIPLAY.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ---------------------------FONT AWESOME------------------------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!----------------------------- BOOSTRAP CDN --------------------------------- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!----------------------------- BASE CSS --------------------------------- -->
    <title>Chủ Đề Nhạc Hot | Tuyển tập nhạc hay chọn lọc</title>
    <!-- css grid để kết hợp chia khung và responsive -->
    <link rel="stylesheet" href="../assets/css/grid.css">
    <!-- css mấy cái chung ban đầu -->
    <link rel="stylesheet" href="../assets/css/base.css">
    <!-- css chính -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- css để responsive trên các thiết bị -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <style>
      <?php include "style.css"?>
    </style>
  </head>


  <body>
    <div class="root">
      <div class="row no-gutters">
        <!-- sidebar -->
        <div class="sidebar">
          <!-- logo -->
          <div class="sidebar__logo">
          </div>
          <!-- nav -->
          <ul class="sidebar__nav">
            <li>
              <a href="../Trangchu/">
                <i class="sidebar__icon far fa-play-circle"></i>
                <span>Cá Nhân</span>
              </a>
            </li>
            <li>
              <a href="../Trangchu/">
                <i class="sidebar__icon fas fa-compact-disc"></i>
                <span>khám Phá</span>
              </a>
            </li>
            <li>
              <a href="../Trangchu/">
                <i class="sidebar__icon fas fa-chart-line"></i>
                <span>#zingchart</span>
              </a>
            </li>
            <li>
              <a href="../TrangTheoDoi/">
                <i class="sidebar__icon fa-regular fa-rectangle-list"></i>
                <span>Theo Dõi</span>
              </a>
            </li>
            <li class="underline"></li>
            <li>
              <a href="../TrangTheLoai/">
                <i class="sidebar__icon fab fa-buromobelexperte"></i>
                <span>Thể Loại</span>
              </a>
            </li>
            <li>
              <a href="../TrangTop100/">
                <i class="sidebar__icon fas fa-star"></i>
                <span>Top 100</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- main -->
        <div class="main">
            <header class="header">
              <div class="container justify-content-between
                justify-content-end">
                <?php
                  require_once ("../search/search.php")
                ?>
                <div class="header-option">
                  <div class="header-setting">
                    <i class="fas fa-cog header-icon"></i>
                  </div>
                  <div class="header__user">
                    <img src="./img/user/0.jpg" alt="" class="header__user-img">
                    <p class="header_user-name"><?php
                                                            if (isset($name)) {
                                                                echo $name;
                                                            } else {
                                                                echo "account";
                                                            }
                                                            ?></p>
                    <ul class="header__user-list">
                      <li class="header__user-item" id="logout-link"><a
                          href="../login/">Log out</a></li>
                      <li class="header__user-item"><a href="../uploadmusic/">Upload
                          song</a></li>
                      <li class="header__user-item"><a href="../profile/">Profile</a></li>
                      <li class="header__user-item" style=" <?php
                                                  if(!(isset($name) && $name=="admin")){
                                                      echo "display:none;";
                                                  }
                                                      ?>"><a href="../Admin/Account/">Admin</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </header>
          

          <!-- content -->
          <div class="content">
            <div class="container">
              <!-- banner -->
              <div class="banner__img">
                <a href="" alt="Banner" aria-label="Banner">
                  <img src="./img/banner_2.png" alt="" class="banner_img" />
                </a>
              </div> 
              <!-- category -->
              <div class="category">
                <div class="activity">
                <?php
                  require_once('../../api/connection.php');
                  $html = '';
                  $sql = "SELECT * FROM category_type";
                  $result = $dbCon->query($sql);
                  if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      // $html .= '<h2 class="activity__heading heading">'.$row["name"].'</h2>';

                      $sql1 = "SELECT * FROM category where category_type = " . $row["id"];
                      $result1 = $dbCon->query($sql1);
                      if ($result1 && $result1->num_rows > 0) {
                        $temp = 0;
                        while ($row1 = $result1->fetch_assoc()) {
                          if($temp % 4 == 0) {
                            $html .= '<div class="row">';
                          }
                          $html .= '<div class="col-lg-3 col-md-3 col-6">';
                          $html .= '<div class="card col">';
                          $html .= '<div class="card__img">';
                          $html .= '<a href="listSong.php?category='.$row1["id"].'">';
                          $html .= '<img src="./img/'.$row1["image"].'" alt="" />';
                          $html .= '</a></div>';
                          $html .= '</div>';
                          $html .= '</div>';
                          if($temp % 4 == 3) {
                            $html .= '</div>';
                          }
                          $temp ++;
                        }
                      }
                    }
                  }
                  $dbCon->close();
                  echo $html;
                ?>
                </div>
              </div>
            </div>
          </div>           
          
          <!-- footer -->
          <footer class="footer">
          </footer>
        </div>
      </div>
    </div>


    <!----------------------------------BOOSTRAP------------------------------------- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-----------------------------------JQUERY------------------------------------- -->
    <script src='../lib/Jquery.js'></script>

  </body>
</html>
