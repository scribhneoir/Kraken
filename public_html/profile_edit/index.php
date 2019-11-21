<?php
include '../../private_html/config.php';
include '../../private_html/user.class.php';
session_start();

$user = unserialize($_SESSION['user']);
if(isset($_POST['first_name'])){
    $user->First_Name = $_POST['first_name'];
    $user->Last_Name = $_POST['last_name'];
    $user->Gender = $_POST['gender'];
    $user->Password = $_POST['password'];
    $_SESSION['user'] = serialize($user);
    header("Location: ../profile");
}
$password = $user->Password;
$first_name = $user->First_Name;
$last_name = $user->Last_Name;
$gender = $user->Gender;

$AdditionalCSS = "";
$title = "Kracken - Profile";
$smarty->assign('first_name', $first_name);
$smarty->assign('last_name', $last_name);
$smarty->assign('gender', $gender);
$smarty->assign('title', $title);
$smarty->assign('AdditionalCSS', $AdditionalCSS);

$smarty->display('profile_edit.tpl');

?>