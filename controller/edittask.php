<?php 
require('../model/db.php');
$id = $_POST['id'];
$name = $_POST['name'];
$project = $_POST['project'];
$appointed = $_POST['appointed'];
$status = $_POST['status'];
$description = $_POST['description'];
$nowTime = date("Y-m-d H:i:s",time());
$priority = $_POST['priority'];

if ($status == 'Закрыта'){
	$prepare = $db->prepare("  
	UPDATE tasks SET name = ?, project = ?, status = ?, description = ?, appointed = ?, enddate = ?,priority = ? WHERE id = '$id'
	");
 	$execute = $prepare->execute(array($name,$project,$status,$description,$appointed,$nowTime,$priority));
} else{
	$prepare = $db->prepare("  
	UPDATE tasks SET name = ?, project = ?, status = ?, description = ?, appointed = ?,priority = ? WHERE id = '$id'
	");
 	$execute = $prepare->execute(array($name,$project,$status,$description,$appointed,$priority));
}

if($execute){
	echo 1;
}else{
	echo 0;
}
?>