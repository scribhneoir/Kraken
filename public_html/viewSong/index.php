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
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $songId = "1000000000";
    if(isset($_GET['songId'])){
        $songId = $_GET['songId'];
    }

    if(isset($_POST['songReview'])) {
        $DReview = $_POST['songReview'];
        $userAdd = $first_name . " " . $last_name;

        $sql = "SELECT user FROM `reviews` WHERE user = '$userAdd'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $already = $stmt->fetchAll();
        if (isset($already)) {
            try {
                $sql = "UPDATE `reviews`  SET `review`= '$DReview' WHERE user = '$userAdd'";
                // use exec() because no results are returned
                $conn->exec($sql);
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        } else {
            try {
                $sql = "INSERT INTO `reviews` (`review`, `songId`, `user`) VALUES ('$DReview', '$songId', '$userAdd')";
                // use exec() because no results are returned
                $conn->exec($sql);
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }
    }

    $sql = "SELECT * FROM songList WHERE songID ='$songId'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $songInfo = $stmt->fetchAll();
    $songInfo = $songInfo[0];

    $sql = "SELECT review, user FROM `reviews` WHERE songId = '$songId'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $songReviews = $stmt->fetchAll();

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
    $smarty->assign("songReviews", $songReviews);
    $smarty->display("viewSong.tpl");
?>
