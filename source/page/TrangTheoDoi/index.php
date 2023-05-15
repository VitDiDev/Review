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
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      />
    <link rel="stylesheet"
      href="../lib/fontawesome-free-6.2.1-web/css/fontawesome.css" />
    <!----------------------------- BOOSTRAP CDN --------------------------------- -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous" />
    <!----------------------------- BASE CSS --------------------------------- -->
    <title>Theo dõi những người nổi tiếng gần đây</title>
    <link rel="stylesheet" href="style.css">
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
          <div class="sidebar__logo"></div>
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
      </div>
      <div class="main">
        <div class="container">
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
                    </ul>
                  </div>
                </div>
              </div>
            </header>
        </div>
        <!-- ----------------------------- content: -------------------------->
        <div class="content">
          <!-- carousel and zing choice -->
          <div>
            <div class="carousel">
              <div class="container">
                <div class="carousel__list">
                  <div class="zm-choice">
                    <h2 class="title">Best Choice Award Of Muxi</h2>
                  </div>
                  <div class="row">
                    <div class="carousel__item">
                      <img src="./img/chi-dan.png" alt="Ca Sĩ Chi Dân" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/duc-phuc.png" alt="Ca Sĩ Đức Phúc" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/erik.png" alt="Ca Sĩ Erik" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/hoa-minzy.png" alt="Ca Sĩ Hoà Minzy" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/huong-ly.png" alt="Ca Sĩ Hương Ly" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/jack.png" alt="Ca Sĩ Jack" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/justatee.png" alt="Ca Sĩ Justatee" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/karik.png" alt="Ca Sĩ Karik" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/mr-siro.png" alt="Ca Sĩ Mr Siro" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/onlyc.png" alt="Ca Sĩ Only C" />
                    </div>
                    <div class="carousel__item">
                      <img src="./img/trinh-thanh-binh.png" alt="Ca Sĩ Trịnh Thăng Bình" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end carousel and zing choice-->
          </div>
        </div>
        <!-- ------------------------ news -------------------- -->
        <div class="news">
          <div class="container">
            <div class="heading">
              <h3 class="heading_news">Tâm Trạng Và Hoạt Động</h3>
              <p class="heading_news_feel">Hôm nay có tin tức gì ?</p>
            </div>
          </div>
          <!-- ------------------------------------- bảng tin --------------------------- -->
          <div class="singers">
            <div class="singers-item">
              <div class="zm-card zm-card-01">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/ns-son-thach.jpg" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">S.T Sơn Thạch</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">16 tháng 11 lúc 14:14</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="status">Được ngày nghỉ, mà cũng ko nghỉ💪🏻💪🏻💪🏻💪🏻💪🏻</div>
                <div class="card-content">
                  <img class="singer-img" src="./img/img1.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">156</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">0</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="singers-item">
              <div class="zm-card zm-card-02">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/nhu-hexi.webp" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">Như Hexi</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">16 tháng 11 lúc 14:14</p>
                      </div>
                    </div>
                  </div>
                  <div class="status">
                    Vẻ đẹp không nằm trên gò má của người thiếu nữ Mà nó nằm trong ánh mắt của kẻ si tình ♥️
                  </div>
                </div>
                <div class="card-content">
                  <img class="singer-img" src="./img/img2.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">328</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">0</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="singers-item">
              <div class="zm-card zm-card-03">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/ung-dai-ve.webp" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">Ưng Đại Vệ</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">16 tháng 11 lúc 14:13</p>
                      </div>
                    </div>
                  </div>
                  <div class="status">
                    1 đôi chân phải bước qua bao nhiêu ngã ba đường ? Và mỗi lần sẽ là 1 trải nghiệm vui hay là buồn ?
                  </div>
                </div>
                <div class="card-content">
                  <img class="singer-img" src="./img/img3.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">207</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">0</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="singers-item">
              <div class="zm-card zm-card-04">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/hoa-minzy-1.png" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">Hoà Minzy</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">2 tháng 12 lúc 19:00</p>
                      </div>
                    </div>
                  </div>
                  <div class="status">Ngủ ngon nhé 💕</div>
                </div>
                <div class="card-content">
                  <img class="singer-img" src="./img/img5.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">1,032</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">145</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="singers-item">
              <div class="zm-card zm-card-05">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/duc-phuc-1.png" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">Đức Phúc</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">6 tháng 9 lúc 19:00</p>
                      </div>
                    </div>
                  </div>
                  <div class="status">I just need you and some sunsets 💌</div>
                </div>
                <div class="card-content">
                  <img class="singer-img" src="./img/img6.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">1,285</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">545</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="singers-item">
              <div class="zm-card zm-card-06">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/erik-1.png" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">Erik</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">21 tháng 5 lúc 13:00</p>
                      </div>
                    </div>
                  </div>
                  <div class="status">Your groom 🤵🏻✨</div>
                </div>
                <div class="card-content">
                  <img class="singer-img" src="./img/img7.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">2,285</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">521</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="singers-item">
              <div class="zm-card zm-card-07">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/dalab.png" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">DALAB</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">2 ngày trước lúc 13:00</p>
                      </div>
                    </div>
                  </div>
                  <div class="status">
                    Nếu đã mang trong mình bản chất của một quý ông thì bạn mặc gì cũng toát lên phong thái của một quý
                    ông, còn nếu đã không có trong mình bản chất quý xtộc thì
                  </div>
                </div>
                <div class="card-content">
                  <img class="singer-img" src="./img/img8.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">500</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">12</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="singers-item">
              <div class="zm-card zm-card-08">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/tay-nguyen-sound.png" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">Tây Nguyên Sound</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">1 tháng 12 lúc 9:30</p>
                      </div>
                    </div>
                  </div>
                  <div class="status">Cảm ơn #TNS4LIFE gất nhìuuuuu</div>
                </div>
                <div class="card-content">
                  <img class="singer-img" src="./img/img9.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">1,500</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">120</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="singers-item">
              <div class="zm-card zm-card-09">
                <div class="card-header">
                  <div class="media">
                    <div class="media-left">
                      <img src="./img/img10.png" alt="" />
                    </div>
                    <div class="media-content">
                      <div class="singer-name">
                        <p class="singer">Vũ</p>
                        <span class="infor"> • </span>
                        <p class="infor1">Quan Tâm</p>
                      </div>
                      <div class="datetime">
                        <p class="timer">9 tháng 9 lúc 9:30</p>
                      </div>
                    </div>
                  </div>
                  <div class="status">
                    Đôi khi ta bỏ ngỏ Những vụng dại thanh xuân Để khiến những bước chân Vụng về trên lối cũ.
                  </div>
                </div>
                <div class="card-content">
                  <img class="singer-img" src="./img/vu.png" alt="" />
                </div>
                <div class="like-comment">
                  <div class="like">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">1,000</p>
                  </div>
                  <div class="comment">
                    <i class="fa-regular fa-comment"></i>
                    <p class="number">350</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- -------------------------------------------- end bảng tin ------------------ -->
        <!-- contact -->
        <div class="contact">
          <div class="container">
            <div class="row">
              <div class="contact__form col-lg-6 col-12">
                <h3 class="contact__form-title">Vote for Zing Choice 2023</h3>
                <p class="contact__form-decs">About yourself?</p>
                <div class="row">
                  <div class="col-12 col-md-6"><input type="text" placeholder="Name" /></div>
                  <div class="col-12 col-md-6"><input type="email" placeholder="Email" /></div>
                  <div class="col-12"><textarea placeholder="Name of your favourite singer"></textarea></div>
                </div>
                <button type="button">VOTE FOR YOUR FAVOURITE SINGER</button>
              </div>
              <div class="thumbnail col-6 d-lg-block d-none">
                <img src="./img/zing-choice.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
        <!-- end contact -->
      </div>
    </div>
    <script>
        document.getElementById("logout-link").addEventListener("click", function(event) {
            event.preventDefault(); // prevent the default behavior of the link
            <?php setcookie("username", "", time() - 3600, "/"); ?> // unset the session variable
            window.location.href = "../login/"; // redirect to the link's URL
            
        });
    </script>
  </body>
</html>
