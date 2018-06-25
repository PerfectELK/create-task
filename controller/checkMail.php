<?php
require('../model/db.php');

$email = $_POST['email'];
$query = $db->query("  
	SELECT email FROM users WHERE email = '$email'
	");
foreach($query as $row){
	$emailres = $row['email'];
}

if (isset($emailres)){
	echo 1;
} else {
	echo 0;
}


?>