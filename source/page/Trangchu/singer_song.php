<?php
session_start();
if (isset($_COOKIE["username"])) {
    $name = $_COOKIE["username"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUXIPLAY</title>
    <link rel="icon" href="../assets/img/sidebar-icon/logo/logo-dark.png" type="image/gif" sizes="16x16">
    <!-- reset css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- css grid để kết hợp chia khung và responsive -->
    <link rel="stylesheet" href="../assets/css/grid.css">
    <!-- css mấy cái chung ban đầu -->
    <link rel="stylesheet" href="../assets/css/base.css">
    <!-- css chính -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- css để responsive trên các thiết bị -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- nếu trình duyệt IE < 9 thì comment dưới sẽ thành code chạy dc, code scrip dước có chức năng để chạy dc media-query để responsive trên trình chuyệt thấp IE < 9 -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.1/respond.js"></script>
    <![endif]-->
    <!-- dùng google font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- icon fontawesome -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
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
                            <a href="../TrangChu/">
                                <i class="far fa-play-circle"></i>
                                <span>Cá Nhân</span>
                            </a>
                        </li>
                        <li class="sidebar__item js__sidebar-tabs
                                js__main-color">
                                <a href="../TrangChu/">
                                    <i class="fas fa-compact-disc"></i>
                                    <span>khám Phá</span>
                                </a>
                        </li>
                        <li class="sidebar__item js__sidebar-tabs
                                js__main-color">
                            <a href="../TrangChu/">
                                <i class="fas fa-chart-line"></i>
                                <span>#zingchart</span>
                            </a>
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
                                <a href="../assets/pages/TrangMV/index.html">
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
                <div class="header-wrapper">
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
                </div>

                <div class="main-container-pertional js__container-panes
                        active">
                    <div class="music__option">
                        <!-- <ul class="music__option-list js__backgroundColor"> -->
                            <!-- top-music__option-item -->
                            <!-- <li class="tabs-item music__option-item
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
                        </ul> -->
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
                                        <img src="../assets/img/slider/0.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-first">
                                        <img src="../assets/img/slider/1.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-second">
                                        <img src="../assets/img/slider/2.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/3.jpg" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/4.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/5.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/6.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/7.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/8.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/9.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/10.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/11.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/12.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/13.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/14.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                        <img src="../assets/img/slider/15.webp" alt="anh slider" class="option-all__song-slider-img
                                                option-all__song-slider-img-third">
                                    </div>
                                </div>

                                <div class="col l-9 m-12 s-12">
                                    <div class="option-all__songs">
                                        <ul class="option-all__songs-list
                                                songs-list">
                                            <!-- songs-item--active -->
                                            <!-- <li class="songs-item songs-item--active">
                                                <div class="songs-item-left">
                                                    <img src="../assets/img/songs/0.webp" alt="danh sanh nhac" class="songs-item-left-img">
                                                    <div class="songs-item-left-body">
                                                        <h3 class="songs-item-left-body-name">Cưới Luôn Được Không</h3>
                                                        <span class="songs-item-left-body-singer">Út Nhị x KenPham Remix</span>
                                                    </div>
                                                </div>
                                                <div class="songs-item-center">
                                                    <span>Cưới Luôn Được Không (Single)</span>
                                                </div>
                                                <div class="songs-item-right">
                                                    <span class="songs-item-right-mv"><i class="fas fa-photo-video"></i></span>
                                                    <span class="songs-item-right-lyric"><i class="fas fa-microphone"></i></span>
                                                    songs-item-right-tym--active
                                                    <span class="songs-item-right-tym">
                                                        <i class="fas fa-heart songs-item-right-tym-first"></i>
                                                        <i class="far fa-heart songs-item-right-tym-last"></i>
                                                    </span>
                                                    <span class="songs-item-right-duration">04:05</span>
                                                    <span class="songs-item-right-more"><i class="fas fa-ellipsis-h"></i></span>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                                <!-- songs-item--active -->
                                <!-- <li class="songs-item songs-item--active">
                                    <div class="songs-item-left">
                                        <img src="../assets/img/songs/0.webp" alt="danh sanh nhac" class="songs-item-left-img">
                                        <div class="songs-item-left-body">
                                            <h3 class="songs-item-left-body-name">Cưới Luôn Được Không</h3>
                                            <span class="songs-item-left-body-singer">Út Nhị x KenPham Remix</span>
                                        </div>
                                    </div>
                                    <div class="songs-item-center">
                                        <span>Cưới Luôn Được Không (Single)</span>
                                    </div>
                                    <div class="songs-item-right">
                                        <span class="songs-item-right-mv"><i class="fas fa-photo-video"></i></span>
                                        <span class="songs-item-right-lyric"><i class="fas fa-microphone"></i></span>
                                        songs-item-right-tym--active
                                        <span class="songs-item-right-tym">
                                            <i class="fas fa-heart songs-item-right-tym-first"></i>
                                            <i class="far fa-heart songs-item-right-tym-last"></i>
                                        </span>
                                        <span class="songs-item-right-duration">04:05</span>
                                        <span class="songs-item-right-more"><i class="fas fa-ellipsis-h"></i></span>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- option 2 -->
                    <div class="option-playlist panes-item">
                        <div class="option-all__playlist
                                option-all__margin_bot">
                            <div class="option-heading
                                    option-all__playlist-heading mobile-hiden">
                                <h3 class="option-heading-name
                                        js__main-color">Playlist</h3>
                                <div class="more-list ">
                                    <span class="js__main-color">Tất cả</span>
                                    <i class="fas fa-chevron-right
                                            js__main-color"></i>
                                </div>
                            </div>
                            <ul class="option-all__playlist-list">
                                <div class="row">
                                    <div class="col l-2-4 m-3 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item0">
                                            <i class="fas fa-plus"></i>
                                            <span>Tạo playlist mới</span>
                                        </li>
                                    </div>
                                    <div class="col l-2-4 m-3 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item">
                                            <div class="option-all__playlist-item-img-wrapper">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <i class="fas fa-times
                                                            option-all__playlist-item-img-wrapper-action-icon1"></i>
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <i class="fas
                                                            fa-ellipsis-h
                                                            option-all__playlist-item-img-wrapper-action-icon3"></i>
                                                </div>
                                                <div class="option-all__playlist-item-img" style="background-image:
                                                        url(../assets/img/playlist/1.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content">
                                                <div class="option-all__playlist-item-content-name1
                                                        js__main-color">Replay</div>
                                                <div class="option-all__playlist-item-content-name2
                                                        js__sub-color">My List</div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-2-4 m-3 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item">
                                            <div class="option-all__playlist-item-img-wrapper">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <i class="fas fa-times
                                                            option-all__playlist-item-img-wrapper-action-icon1"></i>
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <i class="fas
                                                            fa-ellipsis-h
                                                            option-all__playlist-item-img-wrapper-action-icon3"></i>
                                                </div>
                                                <div class="option-all__playlist-item-img" style="background-image:
                                                        url(../assets/img/playlist/2.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content">
                                                <div class="option-all__playlist-item-content-name1
                                                        js__main-color">4U - On
                                                    Repeat</div>
                                                <div class="option-all__playlist-item-content-name2
                                                        js__sub-color">Zing MP3</div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-2-4 m-3 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item">
                                            <div class="option-all__playlist-item-img-wrapper">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <i class="fas fa-times
                                                            option-all__playlist-item-img-wrapper-action-icon1"></i>
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <i class="fas
                                                            fa-ellipsis-h
                                                            option-all__playlist-item-img-wrapper-action-icon3"></i>
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-fix" style="background-image:
                                                        url(../assets/img/playlist/3.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content">
                                                <div class="option-all__playlist-item-content-name1
                                                        js__main-color">#zingchart</div>
                                                <div class="option-all__playlist-item-content-name2
                                                        js__sub-color">Zing MP3</div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-2-4 m-0 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item">
                                            <div class="option-all__playlist-item-img-wrapper">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <i class="fas fa-times
                                                            option-all__playlist-item-img-wrapper-action-icon1"></i>
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <i class="fas
                                                            fa-ellipsis-h
                                                            option-all__playlist-item-img-wrapper-action-icon3"></i>
                                                </div>
                                                <div class="option-all__playlist-item-img" style="background-image:
                                                        url(../assets/img/playlist/4.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content">
                                                <div class="option-all__playlist-item-content-name1
                                                        js__main-color">Nhạc của
                                                    Văn Sơn</div>
                                                <div class="option-all__playlist-item-content-name2
                                                        js__sub-color">Zing MP3</div>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </div>

                        <div class="option-all__playlist
                                option-all__margin_bot mobile-hiden">
                            <div class="option-heading
                                    option-all__playlist-heading">
                                <h3 class="option-heading-name
                                        js__main-color">MV</h3>
                                <div class="more-list">
                                    <span class="js__main-color">Tất cả</span>
                                    <i class="fas fa-chevron-right
                                            js__main-color"></i>
                                </div>
                            </div>
                            <ul class="option-all__playlist-list">
                                <div class="row">
                                    <div class="col l-4 m-4">
                                        <li class="option-all__playlist-item">
                                            <div class="option-all__playlist-item-img-wrapper">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-mv" style="background-image:
                                                        url(../assets/img/mv/1.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content-mv">
                                                <img src="../assets/img/mv/icon1.jpg" alt="thanh hung" class="option-all__playlist-item-content-img">
                                                <div class="option-all__playlist-item-content-name">
                                                    <div class="option-all__playlist-item-content-name1
                                                            js__main-color">Thay
                                                        Tôi Yêu Cô Ấy</div>
                                                    <div class="option-all__playlist-item-content-name2
                                                            js__sub-color">Thanh
                                                        Hưng</div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-4 m-4">
                                        <li class="option-all__playlist-item">
                                            <div class="option-all__playlist-item-img-wrapper">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-mv" style="background-image:
                                                        url(../assets/img/mv/2.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content-mv">
                                                <img src="../assets/img/mv/icon2.jpg" alt="Han Sara" class="option-all__playlist-item-content-img">
                                                <div class="option-all__playlist-item-content-name">
                                                    <div class="option-all__playlist-item-content-name1
                                                            js__main-color">Đếm
                                                        Cừu</div>
                                                    <div class="option-all__playlist-item-content-name2
                                                            js__sub-color">Han
                                                        Sara, Kay Trần</div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-4 m-4">
                                        <li class="option-all__playlist-item">
                                            <div class="option-all__playlist-item-img-wrapper">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-mv" style="background-image:
                                                        url(../assets/img/mv/3.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content-mv">
                                                <img src="../assets/img/mv/icon3.jpg" alt="Alex Sensation" class="option-all__playlist-item-content-img">
                                                <div class="option-all__playlist-item-content-name">
                                                    <div class="option-all__playlist-item-content-name1
                                                            js__main-color">Que
                                                        Va</div>
                                                    <div class="option-all__playlist-item-content-name2
                                                            js__sub-color">Alex
                                                        Sensation, Ozuna</div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- option 3 -->
                    <div class="option-singer panes-item">
                        <div class="option-all__playlist
                                option-all__margin_bot">
                            <div class="option-heading
                                    option-all__playlist-heading mobile-hiden">
                                <h3 class="option-heading-name
                                        js__main-color">Nghệ Sĩ</h3>
                                <div class="more-list">
                                    <span class="js__main-color">Tất cả</span>
                                    <i class="fas fa-chevron-right
                                            js__main-color"></i>
                                </div>
                            </div>
                            <ul class="option-all__playlist-list">
                                <div class="row">
                                    <div class="col l-2-4 m-4 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item
                                                option-all__playlist-item-margin_top">
                                            <div class="option-all__playlist-item-img-wrapper
                                                    option-all__playlist-item-img-wrapper-mv">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-singer" style="background-image:
                                                        url(../assets/img/singer/1.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content-singer">
                                                <div class="option-all__playlist-item-content-singer-name1
                                                        js__main-color">Mr.Siro</div>
                                                <div class="option-all__playlist-item-content-singer-name2
                                                        js__sub-color">757K quan
                                                    tâm</div>
                                                <div class="option-all__playlist-item-content-singer-profile">
                                                    <i class="fas fa-random
                                                            js__main-color"></i>
                                                    <span class="js__main-color">Góc
                                                        nhạc</span>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-2-4 m-4 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item
                                                option-all__playlist-item-margin_top">
                                            <div class="option-all__playlist-item-img-wrapper
                                                    option-all__playlist-item-img-wrapper-mv">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-singer" style="background-image:
                                                        url(../assets/img/singer/2.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content-singer">
                                                <div class="option-all__playlist-item-content-singer-name1
                                                        js__main-color">Bích
                                                    Phương</div>
                                                <div class="option-all__playlist-item-content-singer-name2
                                                        js__sub-color">381K quan
                                                    tâm</div>
                                                <div class="option-all__playlist-item-content-singer-profile">
                                                    <i class="fas fa-random
                                                            js__main-color"></i>
                                                    <span class="js__main-color">Góc
                                                        nhạc</span>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-2-4 m-4 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item
                                                option-all__playlist-item-margin_top">
                                            <div class="option-all__playlist-item-img-wrapper
                                                    option-all__playlist-item-img-wrapper-mv">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-singer" style="background-image:
                                                        url(../assets/img/singer/3.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content-singer">
                                                <div class="option-all__playlist-item-content-singer-name1
                                                        js__main-color">SOOBIN</div>
                                                <div class="option-all__playlist-item-content-singer-name2
                                                        js__sub-color">466K quan
                                                    tâm</div>
                                                <div class="option-all__playlist-item-content-singer-profile">
                                                    <i class="fas fa-random
                                                            js__main-color"></i>
                                                    <span class="js__main-color">Góc
                                                        nhạc</span>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-2-4 m-4 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item
                                                option-all__playlist-item-margin_top">
                                            <div class="option-all__playlist-item-img-wrapper
                                                    option-all__playlist-item-img-wrapper-mv">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-singer" style="background-image:
                                                        url(../assets/img/singer/4.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content-singer">
                                                <div class="option-all__playlist-item-content-singer-name1
                                                        js__main-color">Sơn Tùng
                                                    M-TP</div>
                                                <div class="option-all__playlist-item-content-singer-name2
                                                        js__sub-color">2.2M quan
                                                    tâm</div>
                                                <div class="option-all__playlist-item-content-singer-profile">
                                                    <i class="fas fa-random
                                                            js__main-color"></i>
                                                    <span class="js__main-color">Góc
                                                        nhạc</span>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col l-2-4 m-4 s-6
                                            mobile-margin-bot-30px">
                                        <li class="option-all__playlist-item
                                                option-all__playlist-item-margin_top">
                                            <div class="option-all__playlist-item-img-wrapper
                                                    option-all__playlist-item-img-wrapper-mv">
                                                <div class="option-all__playlist-item-img-wrapper-action">
                                                    <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                    <i class="fas fa-play
                                                            option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                    <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                                </div>
                                                <div class="option-all__playlist-item-img
                                                        option-all__playlist-item-img-singer" style="background-image:
                                                        url(../assets/img/singer/5.webp);"></div>
                                            </div>
                                            <div class="option-all__playlist-item-content-singer">
                                                <div class="option-all__playlist-item-content-singer-name1
                                                        js__main-color">Hương Ly</div>
                                                <div class="option-all__playlist-item-content-singer-name2
                                                        js__sub-color">604K quan
                                                    tâm</div>
                                                <div class="option-all__playlist-item-content-singer-profile">
                                                    <i class="fas fa-random
                                                            js__main-color"></i>
                                                    <span class="js__main-color">Góc
                                                        nhạc</span>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="main-container-discover js__container-panes ">
                    <!-- part slider -->
                    <div class="container-discover__slider">
                        <div class="container-discover__slider-item
                                container-discover__slider-item-first">
                            <img src="../assets/img/slider-discover/1.jpg" alt="anh" class="container-discover__slider-item-img">
                        </div>
                        <div class="container-discover__slider-item
                                container-discover__slider-item-second">
                            <img src="../assets/img/slider-discover/2.jpg" alt="anh" class="container-discover__slider-item-img">
                        </div>
                        <div class="container-discover__slider-item
                                container-discover__slider-item-third">
                            <img src="../assets/img/slider-discover/3.jpg" alt="anh" class="container-discover__slider-item-img">
                        </div>
                        <div class="container-discover__slider-item
                                container-discover__slider-item-four">
                            <img src="../assets/img/slider-discover/4.jpg" alt="anh" class="container-discover__slider-item-img">
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
                    <!-- part playlist -->
                    <div class="container-discover__playlist
                            option-all__playlist option-all__margin_bot">
                        <div class="option-heading
                                option-all__playlist-heading">
                            <h3 class="option-heading-name white-color
                                    js__main-color">Playlist</h3>
                            <div class="more-list mobile-hiden">
                                <span class="js__main-color">Tất cả</span>
                                <i class="fas fa-chevron-right
                                        js__main-color"></i>
                            </div>
                        </div>
                        <ul class="option-all__playlist-list">
                            <div class="row">
                                <div class="col l-2-4 m-3 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item0">
                                        <i class="fas fa-plus white-color"></i>
                                        <span class="white-color">Tạo
                                            playlist mới</span>
                                    </li>
                                </div>
                                <div class="col l-2-4 m-3 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item">
                                        <div class="option-all__playlist-item-img-wrapper">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <i class="white-color fas
                                                        fa-times
                                                        option-all__playlist-item-img-wrapper-action-icon1"></i>
                                                <i class="white-color fas
                                                        fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <i class="white-color fas
                                                        fa-ellipsis-h
                                                        option-all__playlist-item-img-wrapper-action-icon3"></i>
                                            </div>
                                            <div class="option-all__playlist-item-img" style="background-image:
                                                    url(../assets/img/playlist/1.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content">
                                            <div class="option-all__playlist-item-content-name1
                                                    js__main-color white-color">Replay</div>
                                            <div class="option-all__playlist-item-content-name2
                                                    js__sub-color">Văn Sơn
                                                Nguyễn</div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-2-4 m-3 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item">
                                        <div class="option-all__playlist-item-img-wrapper">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <i class="white-color fas
                                                        fa-times
                                                        option-all__playlist-item-img-wrapper-action-icon1"></i>
                                                <i class="white-color fas
                                                        fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <i class="white-color fas
                                                        fa-ellipsis-h
                                                        option-all__playlist-item-img-wrapper-action-icon3"></i>
                                            </div>
                                            <div class="option-all__playlist-item-img" style="background-image:
                                                    url(../assets/img/playlist/2.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content">
                                            <div class="option-all__playlist-item-content-name1
                                                    js__main-color white-color">4U
                                                - On Repeat</div>
                                            <div class="option-all__playlist-item-content-name2
                                                    js__sub-color">Zing MP3</div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-2-4 m-3 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item">
                                        <div class="option-all__playlist-item-img-wrapper">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <i class="white-color fas
                                                        fa-times
                                                        option-all__playlist-item-img-wrapper-action-icon1"></i>
                                                <i class="white-color fas
                                                        fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <i class="white-color fas
                                                        fa-ellipsis-h
                                                        option-all__playlist-item-img-wrapper-action-icon3"></i>
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-fix" style="background-image:
                                                    url(../assets/img/playlist/3.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content">
                                            <div class="option-all__playlist-item-content-name1
                                                    js__main-color white-color">#zingchart</div>
                                            <div class="option-all__playlist-item-content-name2
                                                    js__sub-color">Zing MP3</div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-2-4 m-0 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item">
                                        <div class="option-all__playlist-item-img-wrapper">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <i class="white-color fas
                                                        fa-times
                                                        option-all__playlist-item-img-wrapper-action-icon1"></i>
                                                <i class="white-color fas
                                                        fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <i class="white-color fas
                                                        fa-ellipsis-h
                                                        option-all__playlist-item-img-wrapper-action-icon3"></i>
                                            </div>
                                            <div class="option-all__playlist-item-img" style="background-image:
                                                    url(../assets/img/playlist/4.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content">
                                            <div class="option-all__playlist-item-content-name1
                                                    js__main-color white-color">Nhạc
                                                của Văn Sơn</div>
                                            <div class="option-all__playlist-item-content-name2
                                                    js__sub-color">Zing MP3</div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <!-- discover all__mv -->
                    <div class="option-all__playlist
                            option-all__margin_bot">
                        <div class="option-heading
                                option-all__playlist-heading">
                            <h3 class="option-heading-name js__main-color">MV</h3>
                            <div class="more-list mobile-hiden">
                                <span class="js__main-color">Tất cả</span>
                                <i class="fas fa-chevron-right
                                        js__main-color"></i>
                            </div>
                        </div>
                        <ul class="option-all__playlist-list">
                            <div class="row">
                                <div class="col l-4 m-4 s-12
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item">
                                        <div class="option-all__playlist-item-img-wrapper">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                <i class="fas fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-mv" style="background-image:
                                                    url(../assets/img/mv/1.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content-mv">
                                            <img src="../assets/img/mv/icon1.jpg" alt="thanh hung" class="option-all__playlist-item-content-img">
                                            <div class="option-all__playlist-item-content-name">
                                                <div class="option-all__playlist-item-content-name1
                                                        js__main-color">Thay Tôi
                                                    Yêu Cô Ấy</div>
                                                <div class="option-all__playlist-item-content-name2
                                                        js__sub-color">Thanh
                                                    Hưng</div>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-4 m-4 s-12
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item">
                                        <div class="option-all__playlist-item-img-wrapper">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                <i class="fas fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-mv" style="background-image:
                                                    url(../assets/img/mv/2.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content-mv">
                                            <img src="../assets/img/mv/icon2.jpg" alt="Han Sara" class="option-all__playlist-item-content-img">
                                            <div class="option-all__playlist-item-content-name">
                                                <div class="option-all__playlist-item-content-name1
                                                        js__main-color">Đếm Cừu</div>
                                                <div class="option-all__playlist-item-content-name2
                                                        js__sub-color">Han Sara,
                                                    Kay Trần</div>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-4 m-4 s-12
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item">
                                        <div class="option-all__playlist-item-img-wrapper">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                <i class="fas fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-mv" style="background-image:
                                                    url(../assets/img/mv/3.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content-mv">
                                            <img src="../assets/img/mv/icon3.jpg" alt="Alex Sensation" class="option-all__playlist-item-content-img">
                                            <div class="option-all__playlist-item-content-name">
                                                <div class="option-all__playlist-item-content-name1
                                                        js__main-color">Que Va</div>
                                                <div class="option-all__playlist-item-content-name2
                                                        js__sub-color">Alex
                                                    Sensation, Ozuna</div>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <!-- discpver singer -->
                    <div class="option-all__playlist
                            option-all__margin_bot">
                        <div class="option-heading
                                option-all__playlist-heading">
                            <h3 class="option-heading-name js__main-color">Nghệ
                                Sĩ</h3>
                            <div class="more-list mobile-hiden">
                                <span class="js__main-color">Tất cả</span>
                                <i class="fas fa-chevron-right
                                        js__main-color"></i>
                            </div>
                        </div>
                        <ul class="option-all__playlist-list">
                            <div class="row">
                                <div class="col l-2-4 m-4 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item
                                            option-all__playlist-item-margin_top">
                                        <div class="option-all__playlist-item-img-wrapper
                                                option-all__playlist-item-img-wrapper-mv">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                <i class="fas fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-singer" style="background-image:
                                                    url(../assets/img/singer/1.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content-singer">
                                            <div class="option-all__playlist-item-content-singer-name1
                                                    js__main-color">Mr.Siro</div>
                                            <div class="option-all__playlist-item-content-singer-name2
                                                    js__sub-color">757K quan tâm</div>
                                            <div class="option-all__playlist-item-content-singer-profile">
                                                <i class="fas fa-random
                                                        js__main-color"></i>
                                                <span class="js__main-color">Góc
                                                    nhạc</span>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-2-4 m-4 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item
                                            option-all__playlist-item-margin_top">
                                        <div class="option-all__playlist-item-img-wrapper
                                                option-all__playlist-item-img-wrapper-mv">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                <i class="fas fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-singer" style="background-image:
                                                    url(../assets/img/singer/2.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content-singer">
                                            <div class="option-all__playlist-item-content-singer-name1
                                                    js__main-color">Bích Phương</div>
                                            <div class="option-all__playlist-item-content-singer-name2
                                                    js__sub-color">381K quan tâm</div>
                                            <div class="option-all__playlist-item-content-singer-profile">
                                                <i class="fas fa-random
                                                        js__main-color"></i>
                                                <span class="js__main-color">Góc
                                                    nhạc</span>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-2-4 m-4 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item
                                            option-all__playlist-item-margin_top">
                                        <div class="option-all__playlist-item-img-wrapper
                                                option-all__playlist-item-img-wrapper-mv">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                <i class="fas fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-singer" style="background-image:
                                                    url(../assets/img/singer/3.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content-singer">
                                            <div class="option-all__playlist-item-content-singer-name1
                                                    js__main-color">SOOBIN</div>
                                            <div class="option-all__playlist-item-content-singer-name2
                                                    js__sub-color">466K quan tâm</div>
                                            <div class="option-all__playlist-item-content-singer-profile">
                                                <i class="fas fa-random
                                                        js__main-color"></i>
                                                <span class="js__main-color">Góc
                                                    nhạc</span>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-2-4 m-4 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item
                                            option-all__playlist-item-margin_top">
                                        <div class="option-all__playlist-item-img-wrapper
                                                option-all__playlist-item-img-wrapper-mv">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                <i class="fas fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-singer" style="background-image:
                                                    url(../assets/img/singer/4.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content-singer">
                                            <div class="option-all__playlist-item-content-singer-name1
                                                    js__main-color">Sơn Tùng
                                                M-TP</div>
                                            <div class="option-all__playlist-item-content-singer-name2
                                                    js__sub-color">2.2M quan tâm</div>
                                            <div class="option-all__playlist-item-content-singer-profile">
                                                <i class="fas fa-random
                                                        js__main-color"></i>
                                                <span class="js__main-color">Góc
                                                    nhạc</span>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col l-2-4 m-4 s-6
                                        mobile-margin-bot-30px">
                                    <li class="option-all__playlist-item
                                            option-all__playlist-item-margin_top">
                                        <div class="option-all__playlist-item-img-wrapper
                                                option-all__playlist-item-img-wrapper-mv">
                                            <div class="option-all__playlist-item-img-wrapper-action">
                                                <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                                <i class="fas fa-play
                                                        option-all__playlist-item-img-wrapper-action-icon2"></i>
                                                <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                            </div>
                                            <div class="option-all__playlist-item-img
                                                    option-all__playlist-item-img-singer" style="background-image:
                                                    url(../assets/img/singer/5.webp);"></div>
                                        </div>
                                        <div class="option-all__playlist-item-content-singer">
                                            <div class="option-all__playlist-item-content-singer-name1
                                                    js__main-color">Hương Ly</div>
                                            <div class="option-all__playlist-item-content-singer-name2
                                                    js__sub-color">604K quan tâm</div>
                                            <div class="option-all__playlist-item-content-singer-profile">
                                                <i class="fas fa-random
                                                        js__main-color"></i>
                                                <span class="js__main-color">Góc
                                                    nhạc</span>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
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
                        <div class="">
                            <!-- <div class="col l-4 laptop-l-6 m-12 s-12"> -->
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
                                            <img src="../assets/img/songs/0.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/1.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/2.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/4.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                        <div class="">
                            <!-- <div class="col l-4 laptop-l-6 m-12 s-12"> -->
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
                                            <img src="../assets/img/songs/0.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/1.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/2.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/4.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                        <div class="">
                            <!-- <div class="col l-4 laptop-l-6 m-12 s-12"> -->
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
                                            <img src="../assets/img/songs/1.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/2.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/3.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                            <img src="../assets/img/songs/4.jpg" alt="anh" class="zingchart-week__item-center-img">
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
                                                url(../assets/img/background-theme/modalThemes/modalTheme1/theme1.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Zing Music Awards</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme1/theme2.jpg);"></div>
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
                                                url(../assets/img/background-theme/modalThemes/modalTheme2/theme1.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Rosé</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme2/theme2.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">IU</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img-wrapper">
                                            <div class="theme-modal__body-group-item-img" style="background-image:
                                                    url(../assets/img/background-theme/modalThemes/modalTheme2/theme3.jpg);"></div>
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
                                                    url(../assets/img/background-theme/modalThemes/modalTheme2/theme4.jpg);"></div>
                                        </div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Lisa</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme2/theme5.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Jennie Kim</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme2/theme6.jpg);"></div>
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
                                                url(../assets/img/background-theme/modalThemes/modalTheme3/theme1.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Tối</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme3/theme2.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Tím</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme3/theme3.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xanh đậm</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme3/theme4.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xanh biển</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme3/theme5.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xanh lá</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme3/theme6.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Nâu</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme3/theme7.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Hồng</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme3/theme8.jpg);"></div>
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
                                                url(../assets/img/background-theme/modalThemes/modalTheme4/theme1.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Sáng</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme4/theme2.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xám</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme4/theme3.jpg);"></div>
                                    </div>
                                    <span class="theme-modal__body-group-item-name
                                            js__main-color">Xanh nhạt</span>
                                </li>
                                <li class="theme-modal__body-group-item
                                        js-theme-item">
                                    <div class="theme-modal__body-group-item-img-wrapper">
                                        <div class="theme-modal__body-group-item-img" style="background-image:
                                                url(../assets/img/background-theme/modalThemes/modalTheme4/theme4.jpg);"></div>
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
                        <div class="ư-100 nextsong__option-wrapper-listplay
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
                            <div class="nextsong__item-img" style="background-image: url(../assets/img/next-song/0.webp);">
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
                                <div class="nextsong__item-img" style="background-image: url(../assets/img/next-song/1.webp);">
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
<?php
  require_once('../../api/connection.php');
  $singer_id = isset($_GET['singer']) ? $_GET['singer'] : 0;
  if ($singer_id == 0) {
    exit();
  }
  $html = '';
  $aMusic = array();
  $sql = 'SELECT music.image, music.name, singer.name as singer, music.src, music.duration 
            FROM music, singer, musicsinger 
            WHERE singer.id = '.$singer_id.' and music.id = musicsinger.music 
            and musicsinger.singer = singer.id
            and music.status = 1 and singer.status = 1';
    $result = $dbCon->query($sql);
    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $html .= <<<EOF
                            <div class="row">
                        <div class="col l-3 m-3 s-8">
                            <div class="music-control__left">
                            <div class="music-control__left-img-box">
                    EOF;
        $html .= '<div class="music-control__left-img" style="background-image: url(../assets/img/songs/'.$row["image"].');"></div>';
        $html .= '</div>';
        $html .= '<div class="music-control__left-content">';
        $html .= '<span class="music-control__left-content-song js__main-color">'.$row["name"].'</span>';
        $html .= '<span class="music-control__left-content-singer js__sub-color">'.$row["singer"].'</span>';
        $html .= '</div>';
        $html .= <<<EOF
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
                    EOF;
        $html .= '<audio id="audio" src="../assets/music/list-song/'.$row["src"].'"></audio>';
        $html .= <<<EOF
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
                    EOF;
        }
    }
//   $dbCon-> close();
  echo $html;
?>
            </div>
            <!-- END MUSIC CONTROL -->
        </div>

        <!-- BEGIN PLAYER ON MOBILE -->
        <!-- active -->
        <div class="mobile-player">
            <div class="mobile-player__headding">
                <img src="../assets/img/sidebar-icon/logo/logo-dark.png" alt="icon-home" class="mobile-player__headding-img">
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
                        url(../assets/img/songs/0.jpg);"></div>
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
    <script>
        document.getElementById("logout-link").addEventListener("click", function(event) {
            event.preventDefault(); // prevent the default behavior of the link
            window.location.href = "../login/logout.php"; // redirect to the link's URL
            
        });
    </script>

    <?php include __DIR__.'\assets\javascript\main_singer.php';?>
</body>

</html>