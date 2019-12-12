<?php
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
        if ($already && $DReview != "") {
            try {
                $sql = "UPDATE `reviews`  SET `review`= '$DReview' WHERE user = '$userAdd'";
                // use exec() because no results are returned
                $conn->exec($sql);
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        } else if($DReview != "") {
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
    $smarty->assign("songId", $songId);
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
