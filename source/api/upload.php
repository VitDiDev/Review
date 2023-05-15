<?php
class MusicController
{
    public $db;
    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'user_music');
        if ($this->db->connect_errno)
            die("Lỗi kết nối: " . $this->db->connect_error);
    }
    public function __destruct()
    {
        if ($this->db->connect_errno) {
            $this->db->close();
        }
        
    }
    
    private function getHighFileName()
    {
        $query = "SELECT COUNT(*) FROM music";
        $result = $this->db->query($query);
        if (!$result) {
            echo "Error executing query: " . $this->db->error;
            exit();
        }
        $row = $result->fetch_array();
        return $row[0];
    }
    public function moveFileToDir($file, $dir)
    {
        $allowedExtensions = ['mp3', 'webp'];
        if (!$file) {
            throw new Exception("Vui lòng chọn một file để tải lên.");
        }
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            throw new Exception("Vui lòng upload file có đuôi .mp3 .");
        }

        if ($file['size'] > 20 * 1024 * 1024) {
            throw new Exception("File size exceeds the maximum limit of 20MB.");
        }

        $number = $this->getHighFileName() + 1;
        $destination = $dir . '/' . $number . '.' . $fileExtension;

        echo $destination;
        
        if (move_uploaded_file($file["tmp_name"], $destination)) {
            return true;
        } else {
            throw new Exception("Unable to move file to destination directory.");
        }
    }
}

$mc = new MusicController;
$uploaddir = '../page/Trangchu/assets/music/list-song';
$uploaddir1 = '../page/Trangchu/assets/img/singer';

if(isset($_POST['submit'])){
    $SNAME = $_POST['song_name'];
    $ANAME = $_POST['artist_name'];
    $NATION = $_POST['nation_name'];
    $DURATION = $_POST['duration'];
    $destination = $_FILES['file_uploadmp3']['name'];
    $destination1 = $_FILES['file_uploadimg']['name'];
}
$sql = "INSERT INTO `music` (poster, country, name, duration, image, src)
VALUES ('$ANAME','$NATION','$SNAME','$DURATION','$destination', '$destination1')";
(new MusicController())->db->query($sql);

// echo '<pre>';
// if ($mc->moveFileToDir($_FILES['file_uploadmp3'], $uploaddir)) {
//     echo "File is valid, and was successfully uploaded.\n";
// } else {
//     echo "Possible file upload attack!\n";
// }

// if ($mc->moveFileToDir($_FILES['file_uploadimg'], $uploaddir1)) {
//     echo "File is valid, and was successfully uploaded.\n";
// } else {
//     echo "Possible file upload attack!\n";
// }
if ($mc->moveFileToDir($_FILES['file_uploadmp3'], $uploaddir) && $mc->moveFileToDir($_FILES['file_uploadimg'], $uploaddir1)) {
    header("Location: ../page/Trangchu/index.php");
} else {
    echo "Possible file upload!\n";
}
// echo '<pre>';

// echo 'Here is some more debugging info:';
// print_r($_FILES);

// print "</pre>";

?>
