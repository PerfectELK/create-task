window.onload = function(){ // Проверка валидности Email
	var email = document.getElementById('email');
	email.onkeyup = function(event){
		$.ajax({
			url: 'controller/checkMail.php',
			type: 'POST',
			dataType: 'html',
			data: {email: email.value},
			success: function success(data){
				var email = document.getElementById('email');
				
				var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
				if(data == 1 || email.value.length == 0 || !pattern.test(email.value)){
					
					$('.emailchek').css('color','#FF1300FF');
					$('.emailchek').removeClass('fa-check');
					$('.emailchek').addClass('fa-times');
					
				} else if(data == 0){
					
					$('.emailchek').css('color','#07FF00FF');
					$('.emailchek').addClass('fa-check');
					$('.emailchek').removeClass('fa-times');
					
				}
        }
	});	
 }

 var name = document.getElementById('name'); // В имени не меннее 5 символов
name.onkeyup = function(){
	if (name.value.length < 5){
		$('.namechek').css('color','#FF1300FF');
		$('.namechek').removeClass('fa-check');
 		$('.namechek').addClass('fa-times');
	} else{
		$('.namechek').css('color','#07FF00FF');
		$('.namechek').addClass('fa-check');
 		$('.namechek').removeClass('fa-times');
	}
}

var pass = document.getElementById('pass'); // Проверка пароля
pass.onkeyup = function(){
	var passpat = /^[a-zA-Z0-9]+$/;
	console.log(passpat.test(pass.value));
	if ((pass.value.length < 7) || (!passpat.test(pass.value))){
		$('.passwalid').css('color','#FF1300FF');
		$('.passwalid').removeClass('fa-check');
 		$('.passwalid').addClass('fa-times');
	} else{
		$('.passwalid').css('color','#07FF00FF');
		$('.passwalid').addClass('fa-check');
 		$('.passwalid').removeClass('fa-times');
	}
}
var pass1 = document.getElementById('pass1'); // Чтобы соответсвовал паролю
pass1.onkeyup = function(){
	if (pass.value != pass1.value || pass1.value.length < 7){
		$('.passident').css('color','#FF1300FF');
		$('.passident').removeClass('fa-check');
 		$('.passident').addClass('fa-times');
	} else {
		$('.passident').css('color','#07FF00FF');
		$('.passident').addClass('fa-check');
 		$('.passident').removeClass('fa-times');
	}
}
function testButton(){ // Включаем отключаем кнопку
	
	if (($('#emailtest').hasClass('fa-times')) || ($('#passtest').hasClass('fa-times')) || ($('#passtest1').hasClass('fa-times')) || ($('#nameltest').hasClass('fa-times'))  ){
	var reg = document.getElementById('reg');
	$('#reg').prop("disabled", true);
} else {
	$('#reg').prop("disabled", false);
}
}
testButton();
setInterval(testButton, 400);

$('#reg').click(function (){ // Регаем пользователя
	$.ajax({
			url: 'controller/reg.php',
			type: 'POST',
			dataType: 'html',
			data: {email:  $('#email').val(),
			       pass:   $('#pass').val(),
			       name:   $('#name').val()

			},
			success: function goReg(data){
				if(data == 1){
				$('#reg').prop("disabled", true);
				$('.successReg').css('color','#000');
				$('.successReg').show('slow');
				$('.successReg').text('Вы успешно зарегистрировались');
				$('.successReg').delay(3000).hide(1000);
				
				setTimeout('document.location.href="/"',1500);
			} else{
				$('.successReg').css('color','#FF1300FF');
				$('.successReg').show('slow');
				$('.successReg').text('Произошла ошибка при регистрации, повторите попытку позже, приносим извинения за доставленные неудобства');
				$('.successReg').delay(3000).hide(1000);
				
			}
		}
	})
});

}


