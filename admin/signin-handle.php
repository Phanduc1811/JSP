<?php
if(!isset($_SESSION))
	session_start();
$username = isset($_POST['username'])?$_POST['username']:'';
$p = isset($_POST['Password'])?$_POST['Password']:'';

if($username == 'admin' && $p == '123456'){
	$_SESSION['admin'] = $username;
	header('location:index.php');
	exit;
}
else{
	header('location:sign-in.php');
	exit;
}
