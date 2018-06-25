<?php
	$numbertask = $_GET[num];
	$query = $db->query("  
		SELECT * FROM tasks WHERE id = '$numbertask'
	"); 
	foreach($query as $row):
?>
<div class="row opentask">
	<div class="col-12 nametask">
		<h2><?php echo $row['name'] ?></h2>
	</div>
	<div class="col-12 tabletask">
		<table>
			<tr>
				<th>Проект</th>
				<th>приоритет</th>
				<th>Статус</th>
				<th>Создал</th>
				<th>Назначена</th>
				<th>Дата создания</th>
				<th>Дата зварешения</th>
			</tr>
			<tr>
				<td><?php echo $row['project']?></td>
				<td><?php echo $row['priority']?></td>
				<td id="statuss"><?php echo $row['status']?></td>
				<td><?php echo $row['created']?></td>
				<td><?php echo $row['appointed']?></td>
				<td><?php echo $row['startdate']?></td>
				<td><?php echo $row['enddate']?></td>
			</tr>
		</table>
	</div>
	<div class="col-12">
		<?php echo $row['description']?>
	</div>
	<div class="col-4 editbutton">
		<button class="btn btn-primary openedit">Редактировать</button>
	</div>
</div>
	<?php endforeach?>
	
<div class="editwindow">
		<?php 
	$edit = $db->query("  
		SELECT * FROM tasks WHERE id = '$numbertask'
	"); 
	foreach($edit as $row):?>
<div class="row editblock">
	<div class="col-12">
		Изменить свойства:
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
		<button class="btn btn-success saveedit">Сохранить</button>
	</div>
</div>
	<?php endforeach?>
</div>
<div class="okedit"></div>

