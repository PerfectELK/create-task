<?php
function testLogin($email,$pass){ // Проверка логина и пароля
	global $db;
	$query = $db->query("  
		SELECT email, pass FROM users WHERE email = '$email'
		");
	foreach($query as $row){
		$hash = $row['pass'];
	}
	if(password_verify($pass,$hash)){
		return true;
	} else{
		return false;
	}
}

function description(&$description,$value){ // для уменьшения выводимого описания
	$readyDescr = "";
	for($i = 0; $i < $value; $i++){
		$readyDescr .= $description[$i];
	}
	return $readyDescr."...";
}
?>