$(document).ready(function($) { // для работы кнопки показать/скрыть
	var i = 0;
	$('.openedit').click(function(){
		i++;
		if ((i % 2) != 0){
		$('.editwindow').css({'display':'block'});
	} else{
		$('.editwindow').css({'display':'none'});
	}
	});


	$('.saveedit').click(function(){ // делаем ajax запрос на редактирование задачи
		$.ajax({
			url: '../controller/edittask.php',
			type: 'POST',
			dataType: 'html',
			data: {id: $('.id').val(),
				   name: $('#name').val(),
				   project: $('#project').val(),
				   appointed: $('#appointed').val(),
				   status: $('#status').val(),
				   priority: $('#priority').val(),
				   description: $('#description').val()
			},
			success: function success(data){
				if(data == 1){
					$('.okedit').css('color','#000');
					$('.okedit').show('slow');
					$('.okedit').text('Изменения прошли успешно');
					$('.okedit').delay(3000).hide(1000);
					setTimeout('document.location.href="/personalroom/room.php?id=tasks"',2500);
				} else{
					$('.okedit').css('color','#FF0C00FF');
					$('.okedit').show('slow');
					$('.okedit').text('Упс, что-то пошло не так');
					$('.okedit').delay(3000).hide(1000);
				}
			}
	});
});

var i = 0;
	$('.createtask').click(function(){ // для работы кнопки показать/скрыть
		i++;
		if ((i % 2) != 0){
		$('.containerCreate').css({'display':'block'});
	} else{
		$('.containerCreate').css({'display':'none'});
	}
	});

$('.createdtask').click(function(){ // ajax запрос на создание задач
		$.ajax({
			url: '../controller/createTask.php',
			type: 'POST',
			dataType: 'html',
			data: {name: $('#name').val(),
				   project: $('#project').val(),
				   appointed: $('#appointed').val(),
				   created: document.getElementById('createUser').innerHTML,
				   status: $('#status').val(),
				   priority: $('#priority').val(),
				   description: $('#description').val()
			},
			success: function success(data){
				if(data == 1){
					$('.okedit').css('color','#000');
					$('.okedit').show('slow');
					$('.okedit').text('Изменения прошли успешно');
					$('.okedit').delay(3000).hide(1000);
					setTimeout('document.location.href="/personalroom/room.php?id=tasks"',2500);
				} else{
					$('.okedit').css('color','#FF0C00FF');
					$('.okedit').show('slow');
					$('.okedit').text('Упс, что-то пошло не так');
					$('.okedit').delay(3000).hide(1000);
				}
			}
	});
});

$(window).resize(function(){ // увеличение, уменьшение окна просмотра
  if(window.innerWidth <= 1245 && window.innerWidth >= 650){
		$('#description').attr('cols', '60');
	} else{
		$('#description').attr('cols', '111');
	}
	if(window.innerWidth <= 650 && window.innerWidth >= 449){
		$('#description').attr('cols', '40');
	}
	if(window.innerWidth <= 448){
		$('#description').attr('cols', '20');
	}
});

});


var status = document.getElementById('statuss').innerHTML; // Блокируем кнопку редактировать, если задача закрыта
if (status == "Закрыта"){
	$('.openedit').prop("disabled", true);
} else{
	$('.openedit').prop("disabled", false);
}

