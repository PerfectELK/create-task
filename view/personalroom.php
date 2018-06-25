<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="../img/lightning-electric-energy.ico" type="image/x-icon">
	<title>task manager</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
	<div class="row navmenurow">
		<div class="col-12">
		<ul class="navmenu">
			<li><a href="/personalroom/room.php?id=myinfo">Моя страница</a></li>
			<li><a href="/personalroom/room.php?id=tasks">Задачи</a></li>
			<li><a href=""></a></li>
			<li><a href=""></a></li>
			<li><a href=""></a></li>
			<li><a href="../model/exit.php">Выход</a></li>
		</ul>
		</div>
	</div>


<?php
	if ($_GET[id] == "myinfo" || !$_GET[id]){
		require('myinfo.php'); 
	} elseif ($_GET[id] == "tasks"){
		require('tasks.php');
	} elseif ($_GET[id] == "opentask"){
		require('opentask.php');
	}

?>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
<script src="../js/jquery.js"></script>
<script src="script.js"></script>
</body>
</html>