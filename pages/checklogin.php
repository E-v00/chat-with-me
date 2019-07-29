<?php
session_start();
include('classes.php');
$user = new User;

$user->SetUserEmail($_POST['email']);
$user->SetUserPass($_POST['password']);

if($user->UserLogin())
{
	$_SESSION['id'] = $user->GetUser();
	$_SESSION['username'] = $user->GetUserName();
	$_SESSION['email'] = $user->GetUserEmail();
	header("location: ../chat.php");
}




?>