<?php
    include '../../private_html/config.php';
    $servername = "kraken.cs.messiah.edu";
    $username = "csadmin";
    $password = "s3amonst3r";
    $dbname = "songs";
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sqlCheck = "SELECT title, album, artist FROM `songList`";
    $check = $conn->query($sqlCheck);
    $songs = array();
    $yeet = $check->fetch();
    $sqlCount = "SELECT COUNT(title) FROM `songList`";
    $count = $conn->query($sqlCount);
    $count = $count->fetch();
    for ($x = 0; $x <= $count[0]-1; $x++) {
        $songs[] = $yeet;
        $yeet = $check->fetch();
    }

    $smarty->assign('songs', $songs);
    $AdditionalCSS = "";
    $smarty->assign("AdditionalCSS", $AdditionalCSS);
    $title = "Kracken - Songs";
    $smarty->assign('title', $title);
    $smarty->display('songList.tpl');
?>