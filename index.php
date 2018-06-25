<?php
session_start();
if (isset($_SESSION['user'])){
	header('location:/personalroom'); // редиректим в ЛК ксли есть сессия
}


require('view/header.php'); // Верхняя часть страницы (капитан очевидность)

require('model/db.php'); // база данных, не трогать

if(!$_GET[id]){
	require('view/login.php'); // если гетом ничего не передается лоадим форму входа
} elseif($_GET[id] == "reg"){
	require('view/reg.php'); // лоадим форму регистрации если в гет есть id=reg
}
require('view/footer.php'); // Нижняя часть страницы (капитан очевидность)
unset($_SESSION['error']); // удаляю переменную, чтобы не маячила перед глазами после рефреша страницы
?>
