<?php
include '../../private_html/config.php';
include '../../private_html/user.class.php';
session_start();

$user = unserialize($_SESSION['user']);
$password = $user->Password;
$email = $user->Email;
$first_name = $user->First_Name;
$last_name = $user->Last_Name;
$gender = $user->Gender;

$AdditionalCSS = "";
$title = "Kracken - Profile";
$smarty->assign('first_name', $first_name);
$smarty->assign('last_name', $last_name);
$smarty->assign('gender', $gender);
$smarty->assign('password', $password);
$smarty->assign('title', $title);
$smarty->assign('AdditionalCSS', $AdditionalCSS);

$smarty->display('profile.tpl');

?>