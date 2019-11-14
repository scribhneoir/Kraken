<?php
    include '../../private_html/config.php';
    $servername = "kraken.cs.messiah.edu";
    $dbusername = "csadmin";
    $dbpassword = "s3amonst3r";
    $dbname = "login";
    $msg = "";
    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(DPOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $country = $_POST['country'];
        $age = $_POST['age'];
        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        }

        $bio = $_POST['textarea'];
        $username = $_POST['user_id'];
        try {
            $sql = "INSERT INTO user (profile_image,email,password,first_name,last_name,country,age,gender,bio,username) 
        VALUES (NULL, '$email','$password','$first_name','$last_name','$country','$age','$gender','$bio','$username')";
            $conn->exec($sql);
            header("Location: index.php");
            exit;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

    }
    $conn = null;
    $title = "Kracken - Register";
    $smarty->assign('title', $title);
    $smarty->display('register.tpl');
?>