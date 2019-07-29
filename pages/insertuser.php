<?php
include('classes.php');

$user = new User;

if(isset($_POST['register']))
{
	$uname = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$user->SetUserName($uname);
	$user->SetUserEmail($email);
	$user->SetUserPass($password);

	$user->InsertUser();

}




?>