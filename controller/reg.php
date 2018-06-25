<?php
require('../model/db.php');
$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $_POST['name'];

$hashpass = password_hash("$pass", PASSWORD_DEFAULT);

$prepare = $db->prepare("  
	INSERT INTO users (email, name , pass) VALUES (?,?,?)
	");
$exec = $prepare->execute(array($email,$name,$hashpass));
if($exec){
	echo 1;
} else{
	echo 0;
}
?>