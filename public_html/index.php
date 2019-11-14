<?php
    include '../private_html/config.php';
    $servername = "kraken.cs.messiah.edu";
    $username = "csadmin";
    $password = "s3amonst3r";
    $dbname = "login";
    $msg = "";
    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(DPOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }
    $sql = "SELECT * FROM user WHERE email = :email AND password = :password";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("Location: library");
        exit;
    }elseif(!empty($_POST['email'])){
        $msg = 'Wrong username or password';
    }
    $conn = null;
    $smarty->assign("msg", $msg);
    $title = "Kracken - Login";
    $smarty->assign('title', $title);
    $smarty->display('index.tpl');
?>