<?php
include '../private_html/config.php';
include '../private_html/user.class.php';
include '../private_html/db.config.php';

$msg = "";
$sql = "SELECT * FROM User WHERE email = :email AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->execute();

$result = $stmt->fetchAll();
if ($stmt->rowCount() > 0) {
    $result = $result[0];
    session_start();
    $user = new User($result['First_Name'],$result['Last_Name'],$result['Email'],$result['Password'],$result['Gender']);
    $_SESSION['user'] = serialize($user);
    echo($user->Last_Name);
    header("Location: profile");
    exit;
}elseif(!empty($_POST['email'])){
    $msg = 'Wrong username or password';
}
$conn = null;

$title = "Kraken";
$pathChange = "";
$smarty->assign('title', $title);
$smarty->assign('pathChange', $pathChange);
$smarty->assign('msg', $msg);
$smarty->display('login.tpl');

?>