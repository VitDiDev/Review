<?php    
    $host = 'localhost';
    $dbname = 'user_music';
    $username = 'root';
    $password = '';
    $dbCon;
    
    try {
      $dbCon = mysqli_connect($host, $username, $password, $dbname);
    }
    catch(PDOException $ex){
        die(json_encode(array('status' => false, 'data' => 'Unable to connect: ' . $ex->getMessage())));
    }

?>