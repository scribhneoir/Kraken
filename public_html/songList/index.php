<?php
    include '../../private_html/config.php';
    $s = "";
    if(isset($_GET['search'])){
        $s = $_GET['search'];
    }
    $servername = "kraken.cs.messiah.edu";
    $username = "csadmin";
    $password = "s3amonst3r";
    $dbname = "songs";
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT title, album, artist,songID FROM `songList` WHERE title LIKE :search";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':search', $s.'%');
    $stmt->execute();
    $songs = array();
    $yeet = $stmt->fetchAll();
    if ($stmt->rowCount() > 0) {
        for ($x = 0; $x < $stmt->rowCount(); $x++) {
            $songs[] = $yeet[$x];
        }
    }

    $smarty->assign('songs', $songs);
    $AdditionalCSS = "<link rel=\"stylesheet\" href=\"../css/songLibrary_style.css\">";
    $smarty->assign("AdditionalCSS", $AdditionalCSS);
    $title = "Kracken - Songs";
    $smarty->assign('title', $title);
    $smarty->display('songList.tpl');
?>