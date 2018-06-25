<a href="/?id=reg" class="reglink">Еще не зарегистрированы</a>
<form action="/personalroom/" method="POST">
<div class="container">
	<div class="row">
		<div class="col login">
			<table class="table_login">
		<tr>
			<th style = "font-size: 30px; color: red;"><?php echo $_SESSION['error'];?></th>
		</tr>
		<tr>
			<th>Войти в учетную запись</th>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td><input type="email" id="emailLogin" name="email" placeholder="E-mail" required><div class="checkdiv"></div></td>
		</tr>
		<tr>
			<td><input type="password" id="passLogin" name="pass" placeholder="Пароль" required><div class="checkdiv"></div></td>
		</tr>
		<tr>
			<td><button  id="login" name="login">Войти</button></td>
		</tr>
	</table>
		</div>
	</div>
</div>
</form>