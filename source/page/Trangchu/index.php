<?php
session_start();
if (!isset($_COOKIE["username"])) {
    header("Location: ../login/index.php");
}
$name = $_COOKIE["username"];
$email = $_COOKIE["email"];
$phone = $_COOKIE["phone"];
setcookie("username", $name, time() + 1800, "/");
setcookie("email", $email ,time() + 1800, "/");
setcookie("phone", $phone, time() + 1800, "/");
require_once('../../api/connection.php');
$sql = 'SELECT id,role FROM users where name = "'.$_COOKIE["username"].'" and status = 1';
$result = $dbCon->query($sql);
if (!$result || $result->num_rows <= 0) {
    $dbCon-> close();
    header("Location: ../login/index.php");
}
$row = $result->fetch_assoc();
if ($row["role"] != 1) {
    $dbCon-> close();
    header("Location: ../login/index.php");
}
$user_id = $row["id"];
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUXIPLAY</title>
    <link rel="icon" href="./assets/img/sidebar-icon/logo/logo-dark.png" type="image/gif" sizes="16x16">
    <!-- reset css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- css grid để kết hợp chia khung và responsive -->
    <link rel="stylesheet" href="./assets/css/grid.css">
    <!-- css mấy cái chung ban đầu -->
    <link rel="stylesheet" href="./assets/css/base.css">
    <!-- css chính -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- css để responsive trên các thiết bị -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- nếu trình duyệt IE < 9 thì comment dưới sẽ thành code chạy dc, code scrip dước có chức năng để chạy dc media-query để responsive trên trình chuyệt thấp IE < 9 -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.1/respond.js"></script>
    <![endif]-->
    <!-- dùng google font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- icon fontawesome -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
</head>

<body>
    <div class="main">
        <div class="grid">
            <!-- BEGIN SIDEBAR -->
            <div class="main-sidebar mobile-hiden">
                <a href="#"></a>
                <div class="sidebar__logo"></div>
                <div class="sidebar__logos"></div>
                <div class="sidebar__persional">
                    <ul class="sidebar__list">
                        <!-- sidebar__item--active -->
                        <li class="sidebar__item js__sidebar-tabs
                                js__main-color sidebar__item--active">
                            <i class="far fa-play-circle"></i>
                            <span>Cá Nhân</span>
                        </li>
                        <li class="sidebar__item js__sidebar-tabs
                                js__main-color">
                            <i class="fas fa-compact-disc"></i>
                            <span>khám Phá</span>
                        </li>
                        <li class="sidebar__item js__sidebar-tabs
                                js__main-color">
                            <i class="fas fa-chart-line"></i>
                            <span>#zingchart</span>
                        </li>
                        <li class="sidebar__item js__main-color">
                            <a href="../TrangTheoDoi/">
                                <i class="far fa-list-alt"></i>
                                <span>Theo Dõi</span>
                            </a>

                        </li>
                    </ul>
                </div>
                <div class="sidebar__line"></div>
                <div class="sidebar__library">
                    <div class="sidebar__library-top">
                        <ul class="sidebar__library-top-list sidebar__list">
                            <!-- sidebar__item--active -->
                            <li class="sidebar__item js__main-color
                                    js__toast">
                                <a href="../TrangTheLoai/">
                                    <i class="fab fa-buromobelexperte"></i>
                                    <span>Thể Loại</span>
                                </a>

                            </li>
                            <li class="sidebar__item js__main-color
                                    js__toast">
                                <a href="../TrangTop100/">
                                    <i class="fas fa-star"></i>
                                    <span>Top 100</span>
                                </a>

                            </li>
                            <!-- <li class="sidebar__item js__main-color js__toast">
                                <a href="./assets/pages/TrangMV/index.html">
                                    <i class="fas fa-photo-video"></i>
                                    <span>MV</span>
                                </a>
                                
                            </li> -->
                        </ul>
                    </div>

                </div>
                <div class="sidebar__line"></div>

            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTAINER -->
            <div class="main-container">
                <!-- header--active -->
                <div class="header_wrap">
                    <div class="header">
                        <?php
                            require_once ("../search/search.php")
                        ?>
                        <div class="header__right">

                            <div class="header__right-overlay hiden"></div>
                            <!-- header__setting--active -->
                            <div class="header__setting mobile-hiden
                                    js__sub-color js__backgroundColor">
                                <i class="fas fa-cog header__setting-icon"></i>
                                <ul class="header__setting-list">
                                    <li class="header__setting-item">
                                        <i class="fas fa-ban"></i>
                                        Danh sách chặn
                                    </li>
                                    <li class="header__setting-item">
                                        <i class="far fa-play-circle"></i>
                                        Chất lượng nhạc
                                    </li>
                                    <li class="header__setting-item">
                                        <i class="fas
                                                fa-external-link-square-alt"></i>
                                        Trình phát nhạc
                                    </li>
                                    <span class="header__setting-line"></span>
                                    <li class="header__setting-item">
                                        <i class="fas fa-info-circle"></i>
                                        Giới thiệu
                                    </li>
                                    <li class="header__setting-item">
                                        <i class="far fa-flag"></i>
                                        Góp ý
                                    </li>
                                    <li class="header__setting-item">
                                        <i class="fas fa-phone-alt"></i>
                                        Liên hệ
                                    </li>
                                    <li class="header__setting-item">
                                        <i class="fab fa-adversal"></i>
                                        Quảng cáo
                                    </li>
                                    <li class="header__setting-item">
                                        <i class="fas fa-notes-medical"></i>
                                        Thoả thuận sử dụng
                                    </li>
                                    <li class="header__setting-item">
                                        <i class="fas fa-shield-alt"></i>
                                        Chính sách bảo mật
                                    </li>
                                </ul>


                            </div>
                            <div class="header__user hover">
                                <img src="./assets/img/header/user/0.jpg" alt="" class="header__user-img">
                                <p class="header_user-name"><?php
                                                            if (isset($name)) {
                                                                echo $name;
                                                            } else {
                                                                echo "account";
                                                            }
                                                            ?></p>
                                <ul class="header__user-list">
                                    <li class="header__user-item" id="logout-link"><a href="../login/">Log out</a></li>
                                    <li class="header__user-item"><a href="../uploadmusic/">Upload song</a></li>
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

                <div class="main-container-pertional js__container-panes
                        active">
                    <div class="music__option">
                        <ul class="music__option-list js__backgroundColor">
                            <!-- top-music__option-item -->
                            <li class="tabs-item music__option-item
                                    js__main-color music__option-item--active">Tổng
                                quan</li>
                            <li class="tabs-item music__option-item
                                    js__main-color">Bài hát</li>
                            <li class="tabs-item music__option-item
                                    js__main-color">Playlist</li>
                            <li class="tabs-item music__option-item
                                    js__main-color">Nghệ sĩ</li>
                            <li class="music__option-item mobile-hiden
                                    js__main-color js__toast">
                                <i class="fas fa-ellipsis-h"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- option 0 -->
                    <div class="option-all panes-item active">
                        <!-- song -->
                        <div class="option-all__song
                                option-all__margin_bot">
                            <div class="option-heading
                                    option-all__song-heading ">
                                <h3 class="option-heading-name
                                        option-all__song-heading-left
                                        mobile-hiden js__main-color">Bài Hát</h3>
                                <div class="option-all__song-heading-right">
                                    <div class="more-list mobile-hiden">
                                        <span class="js__main-color">Tất cả</span>
                                        <i class="fas fa-chevron-right
                                                js__main-color"></i>
                                    </div>

                                    <div class="btn
                                            option-all__song-heading-right-playall-btn
                                            js__playall-0">
                                        <i class="fas fa-play"></i>
                                        Phát tất cả
                                    </div>
                                </div>
                            </div>
                            <div class="grid row">
                                <div class="col l-3 m-0 s-0">
                                    <div class="option-all__song-slider">
                                        <!-- first second -->
                                        <img src="./assets/img/slider/0.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-first">
                                        <img src="./assets/img/slider/1.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-second">
                                        <img src="./assets/img/slider/2.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/3.jpg" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/4.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/5.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/6.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/7.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/8.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/9.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/10.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/11.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/12.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/13.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/14.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/15.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/16.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="./assets/img/slider/17.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                    </div>
                                </div>

                                <div class="col l-9 m-12 s-12">
                                    <div class="option-all__songs">
                                        <ul class="option-all__songs-list
                                                songs-list">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- option-all__playlist -->
                        <?php
                            require_once("./playlist.php");
                        ?>
                        <!-- option-singer -->
                        <?php
                            require_once("./singer.php");
                        ?>
                        </div>
                    </div>
                    <!-- option 1 -->
                    <div class="option-music panes-item">
                        <div class="option-heading
                                option-all__song-heading">
                            <h3 class="option-heading-name
                                    option-all__song-heading-left
                                    js__main-color">Bài Hát</h3>
                            <div class="option-all__song-heading-right">
                                <div class="more-list">
                                    <span class="js__main-color">Tất cả</span>
                                    <i class="fas fa-chevron-right
                                            js__main-color"></i>
                                </div>
                                <div class="btn
                                        option-all__song-heading-right-upload-btn
                                        js__main-color js__backgroundColor">
                                    <i class="fas fa-upload"></i>
                                    Tải lên
                                </div>
                                <div class="btn
                                        option-all__song-heading-right-playall-btn
                                        js__playall-1">
                                    <i class="fas fa-play"></i>
                                    Phát tất cả
                                </div>
                            </div>
                        </div>
                        <div class="grid row">
                            <ul class="option-music-list songs-list">
                            </ul>
                        </div>
                    </div>
                    <!-- option 2 -->
                    <div class="option-playlist panes-item">
                        <?php
                            require_once("./playlist.php");
                        ?>
                        <!-- option-singer -->
                        <?php
                            require_once("./singer.php");
                        ?>
                    </div>
                    <!-- option 3 -->
                    <div class="option-singer panes-item">
                        <div class="option-all__playlist
                                option-all__margin_bot">
                            <!-- <div class="option-heading
                                    option-all__playlist-heading mobile-hiden">
                                <h3 class="option-heading-name
                                        js__main-color">Nghệ Sĩ</h3>
                                <div class="more-list">
                                    <span class="js__main-color">Tất cả</span>
                                    <i class="fas fa-chevron-right
                                            js__main-color"></i>
                                </div>
                            </div> -->
                            <?php
                                require_once("./playlist.php");           
                            ?>
                            <?php require("./singer.php"); ?>   
                        </div>
                    </div>
                </div>

                <div class="main-container-discover js__container-panes ">
                    <!-- part slider -->
                    <div class="container-discover__slider">
                        <div class="container-discover__slider-item
                                container-discover__slider-item-first">
                            <img src="./assets/img/slider-discover/1.jpg" alt="anh" class="container-discover__slider-item-img">
                        </div>
                        <div class="container-discover__slider-item
                                container-discover__slider-item-second">
                            <img src="./assets/img/slider-discover/2.jpg" alt="anh" class="container-discover__slider-item-img">
                        </div>
                        <div class="container-discover__slider-item
                                container-discover__slider-item-third">
                            <img src="./assets/img/slider-discover/3.jpg" alt="anh" class="container-discover__slider-item-img">
                        </div>
                        <div class="container-discover__slider-item
                                container-discover__slider-item-four">
                            <img src="./assets/img/slider-discover/4.jpg" alt="anh" class="container-discover__slider-item-img">
                        </div>
                        <div class="container-discover__slider-left
                                mobile-hiden
                                js__container-discover__slider-left">
                            <i class="fas fa-chevron-left js__main-color"></i>
                        </div>
                        <div class="container-discover__slider-right
                                mobile-hiden
                                js__container-discover__slider-right">
                            <i class="fas fa-chevron-right js__main-color"></i>
                        </div>
                    </div>
                    <?php
                        require_once("./playlist.php");           
                    ?>
                    <?php    require("./singer.php"); ?>
                 
                </div>

                <div class="main-container-zingchart js__container-panes ">
                    <div class="zingchart__headding js__main-color">
                        #zingchart
                    </div>
                    <ul class="zingchart__list js__zingchart__list"></ul>
                    <div class="zingchart__100more">
                        <span class="zingchart__100more-body js__main-color
                                js__border js__zingchart__100more">Xem top 100</span>
                    </div>
                    <div class="zingchart-week__headding zingchart__headding
                            js__main-color">Bảng Xếp Hạng Tuần</div>
                    <div class="row">
                        <!-- <div class=""> -->
                        <div class="col l-8 laptop-l-8 m-12 s-12">
                            <div class="zingchart-week__item-wrapper
                                    js__backgroundColor">
                                <span class="zingchart-week__headding
                                        js__main-color">Việt Nam</span>
                                <ul class="zingchart-week__list">
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">1</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/0.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Anh
                                                    Đã Lạc Vào</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Green,
                                                    Đại Mèo Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">04:37</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">2</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/1.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Chạy
                                                    Về Khóc Với Anh</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Erik,
                                                    Duzme Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">03:26</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">3</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/2.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Sẵn
                                                    Sàng Yêu Em Đi Thôi</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Woni,
                                                    Minh Tú, Đại Mèo Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">05:29</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">4</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Gieo
                                                    Quẻ</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Hoàng
                                                    Thuỳ Linh, ĐEN, Orinn
                                                    Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">04:00</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">5</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/4.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Vui
                                                    Lắm Nha</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Hương
                                                    Ly, Jombie, RIN Music
                                                    Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">05:31</div>
                                    </li>
                                </ul>
                                <div class="zingchart__100more
                                        zingchart-week__100more">
                                    <span class="zingchart__100more-body
                                            js__main-color js__border">Xem tất
                                        cả</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class=""> -->
                            <div class="col l-8 laptop-l-8 m-12 s-12">
                            <div class="zingchart-week__item-wrapper
                                    js__backgroundColor">
                                <span class="zingchart-week__headding
                                        js__main-color">US-UK</span>
                                <ul class="zingchart-week__list">
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">1</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/0.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Anh
                                                    Đã Lạc Vào</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Green,
                                                    Đại Mèo Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">04:37</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">2</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/1.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Chạy
                                                    Về Khóc Với Anh</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Erik,
                                                    Duzme Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">03:26</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">3</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/2.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Sẵn
                                                    Sàng Yêu Em Đi Thôi</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Woni,
                                                    Minh Tú, Đại Mèo Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">05:29</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">4</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Gieo
                                                    Quẻ</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Hoàng
                                                    Thuỳ Linh, ĐEN, Orinn
                                                    Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">04:00</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">5</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/4.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Vui
                                                    Lắm Nha</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Hương
                                                    Ly, Jombie, RIN Music
                                                    Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">05:31</div>
                                    </li>
                                </ul>
                                <div class="zingchart__100more
                                        zingchart-week__100more">
                                    <span class="zingchart__100more-body
                                            js__main-color js__border">Xem tất
                                        cả</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class=""> -->
                            <div class="col l-8 laptop-l-8 m-12 s-12">
                            <div class="zingchart-week__item-wrapper
                                    js__backgroundColor">
                                <span class="zingchart-week__headding
                                        js__main-color">K-Pop</span>
                                <ul class="zingchart-week__list">
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">1</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/0.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Anh
                                                    Đã Lạc Vào</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Green,
                                                    Đại Mèo Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">04:37</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">2</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/1.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Chạy
                                                    Về Khóc Với Anh</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Erik,
                                                    Duzme Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">03:26</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">3</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/2.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Sẵn
                                                    Sàng Yêu Em Đi Thôi</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Woni,
                                                    Minh Tú, Đại Mèo Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">05:29</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">4</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Gieo
                                                    Quẻ</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Hoàng
                                                    Thuỳ Linh, ĐEN, Orinn
                                                    Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">04:00</div>
                                    </li>
                                    <li class="zingchart-week__item">
                                        <div class="zingchart-week__item-left">
                                            <span class="zingchart__item-left-stt
                                                    zingchart-week__item-left-stt">5</span>
                                            <span class="zingchart__item-left-line
                                                    zingchart-week__item-left-line">-</span>
                                        </div>
                                        <div class="zingchart-week__item-center">
                                            <img src="./assets/img/songs/4.jpg" alt="anh" class="zingchart-week__item-center-img">
                                            <div class="zingchart-week__item-center-content">
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-name">Vui
                                                    Lắm Nha</span>
                                                <span class="js__main-color
                                                        zingchart-week__item-center-content-singer">Hương
                                                    Ly, Jombie, RIN Music
                                                    Remix</span>
                                            </div>
                                        </div>
                                        <div class="zingchart-week__item-right
                                                mobile-hiden js__main-color">05:31</div>
                                    </li>
                                </ul>
                                <div class="zingchart__100more
                                        zingchart-week__100more">
                                    <span class="zingchart__100more-body
                                            js__main-color js__border">Xem tất
                                        cả</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END CONTAINER -->

            <!-- LIST SONG MOBILE -->
            <!-- <div class="container-mobile">
                tesst
            </div> -->
            <!-- theme modal -->
            <!-- theme-modal--avtive -->
            <div class="theme-modal">
                <div class="theme-modal__overlay"></div>
                <div class="theme-modal__body">
                    <div class="theme-modal__close-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <h3 class="theme-modal__body-headding js__main-color">Giao
                        diện</h3>
                    <div class="theme-modal__body-group-wrapper">
                        <div class="theme-modal__body-group">
                            <span class="theme-modal__body-group-headding
                                    js__main-color">Chủ đề</span>
                            <ul class="theme-modal__body-group-list">
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme1/theme1.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Zing Music Awards</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme1/theme2.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Tháp Eiffel</span>
                                </li>
                            </ul>
                        </div>

                        <div class="theme-modal__body-group">
                            <span class="theme-modal__body-group-headding
                                    js__main-color">Nghệ Sĩ</span>
                            <ul class="theme-modal__body-group-list">
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme2/theme1.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Rosé</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme2/theme2.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">IU</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img-wrapper">
                                            <div class="theme-modal__body-group-item-img" style="background-image:
                                                    url(./assets/img/background-theme/modalThemes/modalTheme2/theme3.jpg);"></div>
                                        </div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Ji Chang Wook</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img-wrapper">
                                            <div class="theme-modal__body-group-item-img" style="background-image:
                                                    url(./assets/img/background-theme/modalThemes/modalTheme2/theme4.jpg);"></div>
                                        </div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Lisa</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme2/theme5.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Jennie Kim</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme2/theme6.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Jisoo</span>
                                </li>

                            </ul>
                        </div>
                        <div class="theme-modal__body-group">
                            <span class="theme-modal__body-group-headding
                                    js__main-color">Màu tối</span>
                            <ul class="theme-modal__body-group-list">
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme3/theme1.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Tối</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme3/theme2.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Tím</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme3/theme3.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xanh đậm</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme3/theme4.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xanh biển</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme3/theme5.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xanh lá</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme3/theme6.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Nâu</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme3/theme7.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Hồng</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme3/theme8.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Đỏ</span>
                                </li>

                            </ul>
                        </div>
                        <div class="theme-modal__body-group">
                            <span class="theme-modal__body-group-headding
                                    js__main-color">Màu sáng</span>
                            <ul class="theme-modal__body-group-list">
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme4/theme1.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Sáng</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme4/theme2.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xám</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme4/theme3.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xanh nhạt</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(./assets/img/background-theme/modalThemes/modalTheme4/theme4.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Hồng cánh sen</span>
                                </li>
                            </ul>
                        </div>

                    </div>



                </div>
            </div>
            <!-- BEGIN NEXT-SONG -->
            <div class="main-nextsong mobile-tablet-hiden">
                <div class="nextsong__option">
                    <div class="nextsong__option-wrapper">
                        <!-- nextsong__option-wrapper--active -->
                        <div class="nextsong__option-wrapper-listplay
                                nextsong__option-wrapper--active js__toast
                                js__main-color">Danh sách phát</div>
                        <div class="nextsong__option-wrapper-history
                                js__sub-color js__toast">Nghe gần đây</div>
                    </div>
                    <div class="nextsong__option-alarm laptop-hiden
                            js__toast">
                        <i class="fas fa-stopwatch js__main-color"></i>
                    </div>
                    <div class="nextsong__option-more laptop-hiden
                            js__toast">
                        <i class="fas fa-ellipsis-h js__main-color"></i>
                    </div>
                </div>
                <div class="nextsong__box">
                    <div class="nextsong__fist">
                        <!-- <div class="nextsong__fist-item nextsong__item">
                            <div class="nextsong__item-img" style="background-image: url(./assets/img/next-song/0.webp);">
                                <div class="nextsong__item-playbtn"><i class="fas fa-play"></i></div>
                            </div>
                            <div class="nextsong__item-body">
                                <span class="nextsong__item-body-heading">Là Ai Từ Bỏ, Là Ai Vô Tình</span>
                                <span class="nextsong__item-body-depsc">Hương Ly, Jombie</span>
                            </div>
                            <div class="nextsong__item-action">
                                nextsong__item-action-heart--unheart
                                <span class="nextsong__item-action-heart">
                                    <i class="fas fa-heart nextsong__item-action-heart-icon1"></i>
                                    <i class="far fa-heart nextsong__item-action-heart-icon2"></i>
                                </span>
                                <span class="nextsong__item-action-dot">
                                    <i class="fas fa-ellipsis-h "></i>
                                </span>
                            </div>
                        </div> -->
                    </div>
                    <div class="nextsong__last">
                        <h3 class="nextsong__last-heading js__main-color">Tiếp
                            theo</h3>
                        <ul class="nextsong__last-list">
                            <!-- <li class="nextsong__last-item nextsong__item">
                                <div class="nextsong__item-img" style="background-image: url(./assets/img/next-song/1.webp);">
                                    <div class="nextsong__item-playbtn"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="nextsong__item-body">
                                    <span class="nextsong__item-body-heading">Yêu Là Cưới</span>
                                    <span class="nextsong__item-body-depsc">Phát Hồ, X2X</span>
                                </div>
                                <div class="nextsong__item-action">
                                    nextsong__item-action-heart--unheart
                                    <span class="nextsong__item-action-heart">
                                        <i class="fas fa-heart nextsong__item-action-heart-icon1"></i>
                                        <i class="far fa-heart nextsong__item-action-heart-icon2"></i>
                                    </span>
                                    <span class="nextsong__item-action-dot">
                                        <i class="fas fa-ellipsis-h "></i>
                                    </span>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END NEXT-SONG -->

            <!-- BEGIN TAB ON MOBILE -->
            <div class="mobile-tab">
                <ul class="mobile-tab__list">
                    <li class="mobile-tab__item active js__mobile-tab__item
                            js__main-color">
                        <i class="far fa-play-circle"></i>
                        Cá Nhân
                    </li>
                    <li class="mobile-tab__item js__mobile-tab__item
                            js__main-color">
                        <i class="fas fa-compact-disc"></i>
                        Khám Phá
                    </li>
                    <li class="mobile-tab__item js__mobile-tab__item
                            js__main-color">
                        <i class="fas fa-chart-line"></i>
                        #zingchart
                    </li>
                </ul>
            </div>
            <!-- END TAB ON MOBILE -->

            <!-- BEGIN MUSIC CONTROL -->
            <div class="main-music-control">
                <div class="row">
                    <div class="col l-3 m-3 s-8">
                        <div class="music-control__left">
                            <div class="music-control__left-img-box">
                                <div class="music-control__left-img" style="background-image:
                                        url(./assets/img/songs/0.jpg);"></div>
                                <!-- <div class="music-control__left-vetinh">
                                    <svg fill="#fff" viewBox="0 0 512 512" class="img-note vetinh">
                                        <path
                                            d="M470.38 1.51L150.41 96A32 32 0 0 0 128 126.51v261.41A139 139 0 0 0 96 384c-53 0-96 28.66-96 64s43 64 96 64 96-28.66 96-64V214.32l256-75v184.61a138.4 138.4 0 0 0-32-3.93c-53 0-96 28.66-96 64s43 64 96 64 96-28.65 96-64V32a32 32 0 0 0-41.62-30.49z"
                                        ></path>
                                    </svg>
                                    <svg fill="#fff" viewBox="0 0 384 512" class="img-note vetinh-2">
                                        <path d="M310.94 1.33l-96.53 28.51A32 32 0 0 0 192 60.34V360a148.76 148.76 0 0 0-48-8c-61.86 0-112 35.82-112 80s50.14 80 112 80 112-35.82 112-80V148.15l73-21.39a32 32 0 0 0 23-30.71V32a32 32 0 0 0-41.06-30.67z"></path>
                                    </svg>
                                    <svg fill="#fff" viewBox="0 0 512 512" class="img-note vetinh-3">
                                        <path
                                            d="M470.38 1.51L150.41 96A32 32 0 0 0 128 126.51v261.41A139 139 0 0 0 96 384c-53 0-96 28.66-96 64s43 64 96 64 96-28.66 96-64V214.32l256-75v184.61a138.4 138.4 0 0 0-32-3.93c-53 0-96 28.66-96 64s43 64 96 64 96-28.65 96-64V32a32 32 0 0 0-41.62-30.49z"
                                        ></path>
                                    </svg>
                                    <svg fill="#fff" viewBox="0 0 384 512" class="img-note vetinh-4">
                                        <path d="M310.94 1.33l-96.53 28.51A32 32 0 0 0 192 60.34V360a148.76 148.76 0 0 0-48-8c-61.86 0-112 35.82-112 80s50.14 80 112 80 112-35.82 112-80V148.15l73-21.39a32 32 0 0 0 23-30.71V32a32 32 0 0 0-41.06-30.67z"></path>
                                    </svg> 
                                </div> -->
                            </div>

                            <div class="music-control__left-content">
                                <span class="music-control__left-content-song
                                        js__main-color">Anh Đã Lạc Vào</span>
                                <span class="music-control__left-content-singer
                                        js__sub-color">Green, Đại Mèo Remix</span>
                            </div>
                            <div class="music-control__left-action
                                    tablet-hiden mobile-hiden">
                                <!-- music-control__left-action-tym-box-active -->
                                <div class="music-control__left-action-tym-box">
                                    <i class="fas fa-heart
                                            music-control__left-action-tym"></i>
                                    <i class="far fa-heart
                                            music-control__left-action-tym-non"></i>
                                </div>
                                <i class="fas fa-ellipsis-h
                                        music-control__left-action-option
                                        js__main-color js__toast"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col l-6 m-7 s-4
                            rs__main-music-control-flex-1">
                        <div class="music-control__center">
                            <div class="music-control__center-action
                                    music-control__icon">
                                <!-- music-control__icon-random--active -->
                                <i class="fas fa-random music-control__icon1
                                        js__music-control__icon1 js__main-color
                                        mobile-hiden"></i>
                                <i class="fas fa-caret-left
                                        music-control__icon2
                                        js__music-control__icon2
                                        js__main-color"></i>
                                <!-- music-control__icon-play--active -->
                                <div class="music-control__icon-play
                                        js__music-control__icon-play">
                                    <i class="fas fa-play
                                            music-control__icon3 js__main-color
                                            js__border"></i>
                                    <i class="fas fa-pause
                                            music-control__icon33 js__main-color
                                            js__border"></i>
                                </div>
                                <i class="fas fa-caret-right
                                        music-control__icon4
                                        js__music-control__icon4
                                        js__main-color"></i>
                                <!-- music-control__icon-repeat--active -->
                                <i class="fas fa-redo music-control__icon5
                                        js__music-control__icon5 mobile-hiden
                                        js__main-color"></i>
                            </div>
                            <div class="music-control__progress
                                    mobile-hiden">
                                <span class="music-control__progress-time-start
                                        js__music-control__progress-time-start
                                        js__main-color">00:00</span>
                                <input id="progress" class="music-control__progress-input" type="range" value="0" step="1" min="0" max="100">
                                <!-- <div class="music-control__progress-update">
                                    <div class="music-control__progress-update-timeline"></div>
                                </div> -->
                                <span class="music-control__progress-time-duration
                                        js__music-control__progress-time-duration
                                        js__main-color">04:27</span>
                            </div>
                            <audio id="audio" src="./assets/music/list-song/0.mp3"></audio>
                        </div>
                    </div>
                    <div class="col m-2 s-0">
                        <div class="music-control__right">
                            <i class="music-control__right-icon1
                                    ipad-air-hiden js__main-color js__toast fas
                                    fa-photo-video"></i>
                            <i class="music-control__right-icon2
                                    ipad-air-hiden js__main-color js__toast fas
                                    fa-microphone"></i>
                            <i class="music-control__right-icon3
                                    ipad-air-hiden js__main-color js__toast far
                                    fa-square"></i>
                            <!-- music-control__right--active -->
                            <div class="music-control__right-volume-icon">
                                <i class="music-control__right-icon4
                                        js__main-color fas fa-volume-down"></i>
                                <i class="music-control__right-icon5
                                        js__main-color fas fa-volume-mute"></i>
                            </div>
                            <div class="music-control__volume-progress">
                                <input id="progress1" class="music-control__volume-input" type="range" value="100" step="1" min="0" max="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MUSIC CONTROL -->
        </div>

        <!-- BEGIN PLAYER ON MOBILE -->
        <!-- active -->
        <div class="mobile-player">
            <div class="mobile-player__headding">
                <img src="./assets/img/sidebar-icon/logo/logo-dark.png" alt="icon-home" class="mobile-player__headding-img">
                <div class="mobile-player__headding-option">
                    <span class="mobile-player__headding-option-item">ĐANG
                        PHÁT</span>
                    <span class="mobile-player__headding-option-item">LYRIC</span>
                </div>
                <div class="mobile-player__headding-close"><i class="fas
                            fa-times"></i></div>
            </div>
            <div class="mobile-player__body">
                <div class="mobile-player__body-thumb" style="background-image:
                        url(./assets/img/songs/0.jpg);"></div>
                <div class="mobile-player__body-now">
                    <span class="mobile-player__body-now-name">Tình Yêu Ngủ
                        Quên</span>
                    <span class="mobile-player__body-now-singer">Hoàng Tôn,
                        LyHan, Orinn Remix</span>
                    <span class="mobile-player__body-now-extra">Remix
                        Version</span>
                </div>
            </div>
            <div class="mobile-player__ctrl">
                <div class="music-control__center-action
                        music-control__icon">
                    <!-- music-control__icon-random--active -->
                    <i class="fas fa-random music-control__icon1
                            mobile-player__ctrl-icon
                            js__mobile-player__ctrl-icon1"></i>
                    <i class="fas fa-caret-left music-control__icon2
                            mobile-player__ctrl-icon
                            js__mobile-player__ctrl-icon2"></i>
                    <!-- music-control__icon-play--active -->
                    <div class="music-control__icon-play
                            mobile-player__ctrl-icon
                            js__mobile-player__ctrl-icon">
                        <i class="fas fa-play music-control__icon3"></i>
                        <i class="fas fa-pause music-control__icon33"></i>
                    </div>
                    <i class="fas fa-caret-right music-control__icon4
                            mobile-player__ctrl-icon
                            js__mobile-player__ctrl-icon4"></i>
                    <!-- music-control__icon-repeat--active -->
                    <i class="fas fa-redo music-control__icon5
                            mobile-player__ctrl-icon
                            js__mobile-player__ctrl-icon5"></i>
                </div>
                <div class="music-control__progress
                        mobile-player__ctrl-progress">
                    <span class="music-control__progress-time-start
                            mobile-player__ctrl-progress-time-start">00:00</span>
                    <input id="progress2" class="music-control__progress-input
                            mobile-player__ctrl-progress-input" type="range" value="0" step="1" min="0" max="100">
                    <span class="music-control__progress-time-duration
                            mobile-player__ctrl-progress-time-duration">00:00</span>
                </div>
            </div>
        </div>

        <!-- END PLAYER ON MOBILE -->


    </div>

    <div id="toast">
        <!-- <div class="toast__item">
            <i class="fa-solid fa-circle-exclamation"></i>
            <span>Chức năng này đang phát triển, bạn vui lòng thử lại sau !</span>
        </div> -->
    </div>
    <script src="./assets/javascript/main.js"></script>
</body>

</html>