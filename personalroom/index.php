<?php
session_start();
unset($_SESSION['error']);
require('../model/db.php');
require('../controller/functions.php');


if(testLogin($_POST['email'],$_POST['pass']) || isset($_SESSION['user'])){
	$_SESSION['user'] = [
			user => $_POST['email'],
			pass => $_POST['pass']
	];
	header('location: /personalroom/room.php');
} else {
	$_SESSION['error'] = "Неверные логин или пароль";
	header('location: /');
}
?>
