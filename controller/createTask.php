<?php 
require('../model/db.php');
$name = $_POST['name'];
$project = $_POST['project'];
$appointed = $_POST['appointed'];
$status = $_POST['status'];
$description = $_POST['description'];
$nowTime = date("Y-m-d H:i:s",time());
$priority = $_POST['priority'];
$created = $_POST['created'];

$prepare = $db->prepare("  
	INSERT INTO tasks (name, project, status, description, created, appointed,startdate,priority) VALUES (?,?,?,?,?,?,?,?)
	");
$execute = $prepare->execute(array($name,$project,$status,$description,$created,$appointed,$nowTime,$priority));

if ($execute){
	echo 1;
} else{
	echo 0;
}

?>