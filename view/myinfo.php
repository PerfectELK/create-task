<?php
$user = $_SESSION[user]["user"];
$queryUser = $db->query("  
	SELECT * FROM users WHERE email = '$user'
	");

?>
<div class="row">
	<?php foreach($queryUser as $user):?>
		<?php 
		$usertask = $user['name'];
		?>
	<div class="col-12">
		Профиль:
	</div>
	<div class="col">
		<table class="myinfo">
			<tr>
				<th>Email</th>
				<th>Имя</th>
			</tr>
			<tr>
				<td><?php echo $user['email'];?></td>
				<td id="createUser"><?php echo $user['name'];?></td>
			</tr>
		</table>
	</div>
    <?php endforeach?>
</div>
<?php 
$mytask = $db->query("  
	SELECT * FROM tasks WHERE appointed = '$usertask'
	");
?>
<div class="row">
	<div class="col-12">
		<div class="mytasks">
			Мои задачи:
		<?php foreach($mytask as $task):?>
			<a href="/personalroom/room.php?id=opentask&num=<?echo $task['id'];?>"><?php echo $task['name'];?></a>
		<?php endforeach?>	
		</div>
	</div>
<?php 
$createtask = $db->query("  
	SELECT * FROM tasks WHERE created = '$usertask'
	");
?>
	<div class="col-12">
		<div class="createtasks">
		Созданные задачи: 
		<?php foreach($createtask as $task):?>
			<a href="/personalroom/room.php?id=opentask&num=<?echo $task['id'];?>"><?php echo $task['name'];?></a>
		<?php endforeach?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<button class="btn btn-primary createtask">Создать задачу</button>
	</div>
</div>
<div class="containerCreate">
<div class="row ">
	<div class="col-12">
		Указать свойства:
	</div>
	<div class="col edit">
					<input type="text" value="<?php echo $row['id'] ?>" class="id" readonly>
		Наименование:<input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">
		Проект:<select name="project" id="project" >
					<option>Мобильная разработка</option>
					<option>Аппаратная разработка</option>
					<option>Серверная разработка</option>
					<option>Разработка центрального контроллера</option>
			   </select>
		<textarea name="description" id="description" cols="111" rows="10"><?php echo $row['description'] ?></textarea>
	</div>
</div>
<div class="row">
	<div class="col">
		Назначена:<select name="appointed" id="appointed">
					<?php
					$names = $db->query("  
						SELECT name FROM users 
						");
					foreach ($names as $name) {
						echo "<option>".$name['name']."</option>";
					}
					?>
					</select>
	Статус:<select name="status" id="status">
			<option>Открыта</option>
			<option>Закрыта</option>
			<option>Отклонена</option>
			<option>Приостановлена</option>
			<option>Дана обратная связь</option>
				</select>
	Приоритет:<select id="priority">
			<option>Низкий</option>
			<option>Нормальный</option>
			<option>Высокий</option>
			<option>Ультра-высокий</option>
	          </select>
	</div>
</div>
<div class="row">
	<div class="col">
		<button class="btn btn-success createdtask">Создать</button>
	</div>
</div>
<div class="okedit"></div>
</div>
