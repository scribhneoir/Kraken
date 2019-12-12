<?php
//    $songfk = "1000000000";
//    $servername = "kraken.cs.messiah.edu";
//    $username = "csadmin";
//    $password = "s3amonst3r";
//    $dbname = "songs";
//    //
//    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "SELECT review, user FROM `reviews` WHERE $songfk = songId";
//
//    $row = $conn-> query($sql);
//    $review = $row->fetch();
//    $sqlCount = "SELECT COUNT(reviewId) FROM `reviews`";
//    $count = $conn->query($sqlCount);
//    $count = $count->fetch();
//    for ($x = 0; $x <= $count[0]-1; $x++) {
//        echo '<p style="margin-top:10px; margin-left: 10px;">'.$review[1].': '.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$review[0].'</p>';
//        $review = $row->fetch();

    include "../../private_html/config.php";
    include '../../private_html/user.class.php';
    session_start();

    $user = unserialize($_SESSION['user']);
    $email = $user->Email;
    $first_name = $user->First_Name;
    $last_name = $user->Last_Name;
    $servername = "kraken.cs.messiah.edu";
    $username = "csadmin";
    $password = "s3amonst3r";
    $dbname = "songs";
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $DReview = "yes";
    $userAdd = "Gage Sapp";

    $songId = "1000000000";
    if(isset($_GET['songId'])){
        $songId = $_GET['songId'];
    }

    if(isset($_POST['songReview'])) {
        try {
            $sql = "INSERT INTO `reviews` (`review`, `songId`, `user`) VALUES ('$DReview', '$songId', '$userAdd')";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    $sql = "SELECT * FROM songList WHERE songID ='$songId'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $songInfo = $stmt->fetchAll();
    $songInfo = $songInfo[0];

    $AdditionalCSS = "";
    $smarty->assign("AdditionalCSS", $AdditionalCSS);
    $title = "Kracken - Songs";
    $smarty->assign('title', $title);
    $smarty->assign("songTitle", $songInfo[1]);
    $smarty->assign("songLength", $songInfo[2]);
    $smarty->assign("songGenre", $songInfo[3]);
    $smarty->assign("songAlbum", $songInfo[4]);
    $smarty->assign("songArtist", $songInfo[5]);
    $smarty->assign("songDescription", $songInfo[6]);
    $smarty->assign("songAdded", $songInfo[7]);
    $smarty->display("viewSong.tpl");
?>
