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

<!doctype html>
<html lang="en">
<head>
  <title>Upload Music</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="./img/logo-dark.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
  <div class="home">
    <a href="../Trangchu/" style="text-decoration: none;">
      <img src="./img/logo-dark.png" alt="home" class="home-img">
      <p class="home-m">Home</p>
    </a>
  </div>
  <div class="upload mx-auto">
    <div class="upload-wrap">
      <h3>Upload Music</h3>
      <form action="../../api/upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" class="form-style" placeholder="Song name" name="song_name">
        </div>
        <div class="form-group">
          <input type="text" class="form-style" placeholder="Artist name" name="artist_name">
        </div>
        <div class="form-group">
          <input type="text" class="form-style" placeholder="Nation name" name="nation_name">
        </div>
        <div class="form-group">
          <label for="files">Select file img</label>
          <input type="file" class="form-style" name="file_uploadimg" id="file_uploadimg">
        </div>
        <hr>
        <div class="form-group">
         <input type="text" class="form-style" name="duration" placeholder="Duration songs">
        </div>
        <div class="form-group">
          <label for="files">Select file mp3</label>
          <input type="file" class="form-style" name="file_uploadmp3" id="file_uploadmp3">
        </div>
        <hr>
        <div class="register form-group">
          <button class="btn mt-4 form-style" type="submit" name="submit">Upload</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>