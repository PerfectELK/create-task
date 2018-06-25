<div class="row">
	<div class="col taskstable">
		<table class="tasks">
			<tr>
				<th>Номер</th>
				<th>Наименование</th>
				<th>Проект</th>
				<th>Приоритет</th>
				<th>Статус</th>
				<th>Описание</th>
				<th>Создатель</th>
				<th>Назначена</th>
				<th>Дата начала</th>
				<th>Дата завершения</th>
			</tr>
			<?php
			$query = $db->query("  
				SELECT * FROM tasks
				"); 
			foreach($query as $row):
				?>
			<tr>
				<td>#<?php echo $row['id']?></td>
				<td><a href="/personalroom/room.php?id=opentask&num=<?echo $row['id'];?>"><?php echo $row['name']?></a></td>
				<td><?php echo $row['project']?></td>
				<td><?php echo $row['priority']?></td>
				<td><?php echo $row['status']?></td>
				<td><?php 
				$description = $row['description'];
				echo description($description,100); ?></td>
				<td><?php echo $row['created']?></td>
				<td><?php echo $row['appointed']?></td>
				<td><?php echo $row['startdate']?></td>
				<td><?php echo $row['enddate']?></td>
			</tr>
		    <?php endforeach?>
		</table>
	</div>
</div>