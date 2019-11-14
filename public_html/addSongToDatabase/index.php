<?php
    include '../../private_html/config.php';
    $msg="";
    if(!empty($_POST['songName'])){
        $servername = "kraken.cs.messiah.edu";
        $username = "csadmin";
        $password = "s3amonst3r";
        $dbname = "songs";
        $Title = $_POST['songName'];
        $Minute = $_POST['songLengthMinute'];
        $Second = $_POST['songLengthSecond'];
        $Minute = ltrim($Minute, 0);
        $Second = ltrim($Second, 0);
        if($Second < 10){
            $Length = $Minute.'0'.$Second;
        }else{$Length = $Minute.$Second;}

        $Genre = $_POST['songGenre'];
        $Album = $_POST['songAlbum'];
        $Artist = $_POST['songArtist'];
        $Description = $_POST['songDescription'];
        $AddedBy = $_POST['userAdded'];
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sqlCheck = "SELECT title, album FROM `songList` WHERE title='$Title' AND album='$Album'";
        $check = $conn->query($sqlCheck);
        $check = $check->fetch();
        if(isset($_POST['songName']) && ($Title==$check[0]) && ($Album==$check[1])){
            $msg= "This song already exists in this album";
        }elseif(isset($_POST['songName'])){
            try {
                $sql = "INSERT INTO `songList` (`songID`, `title`, `songLength`, `genre`, `album`, `artist`, `description`, `addedBy`)
                                                VALUES (NULL, '$Title', '$Length', '$Genre', '$Album', '$Artist', '$Description',' $AddedBy')";
                // use exec() because no results are returned
                $conn->exec($sql);
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            header("Location: ../songList");
            exit;
        }
        $conn = null;
    }
    $AdditionalCSS = "";
    $smarty->assign("msg", $msg);
    $smarty->assign("AdditionalCSS", $AdditionalCSS);
    $title = "Kracken - Add Song";
    $smarty->assign('title', $title);
    $smarty->display('AddSongToDatabase.tpl');
?>