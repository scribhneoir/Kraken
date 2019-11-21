<?php
include '../../private_html/config.php';
include '../../private_html/user.class.php';


$servername = "kraken.cs.messiah.edu";
$dbusername = "csadmin";
$dbpassword = "s3amonst3r";
$dbname = "kraken_DB";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(DPOException $e){
    echo 'ERROR: ' . $e->getMessage();
}
$user = $_SESSION['user'];
$password = $user->Password;
$email = $user->Email;

try {
    $sql = "SELECT First_Name, Last_Name, Gender FROM User WHERE password = $password AND Email = $email";
    $result = $conn->exec($sql);
    header("Location: index.php");
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$first_name = $result[0];
$last_name = $result[1];
$gender = $result[2];

$conn->close();


$AdditionalCSS = "";
$title = "Kracken - Profile";
$smarty->assign('first_name', $first_name);
$smarty->assign('last_name', $last_name);
$smarty->assign('gender', $gender);
$smarty->assign('title', $title);
$smarty->assign('AdditionalCSS', $AdditionalCSS);

$smarty->display('profile.tpl');

?>