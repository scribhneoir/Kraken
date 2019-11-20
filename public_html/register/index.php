<?php
    include '../../private_html/config.php';
    $servername = "kraken.cs.messiah.edu";
    $dbusername = "csadmin";
    $dbpassword = "s3amonst3r";
    $dbname = "kraken_DB";
    $msg = "";
    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(DPOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }

if(isset($_POST['email'])) {
    /*
    $profile_image = $_POST['profile_image'];
    */
    $n=10;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    $password = $randomString;

    $email = $_POST['email'];

    /*
    $password = $_POST['password'];
    */
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    /*
    $country = $_POST['country'];
    $age = $_POST['age'];
*/
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }
/*
    $bio = $_POST['textarea'];
    $username = $_POST['user_id'];
    */
    try {
        $sql = "INSERT INTO User (Password,Email,First_Name,Last_Name,Gender) VALUES ('$password','$email','$first_name','$last_name','$gender')";
        $conn->exec($sql);
        header("Location: index.php");

        // the message
        $msg = "Here is your password\n".$password;

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        mail("$email","Temp Password",$msg);

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