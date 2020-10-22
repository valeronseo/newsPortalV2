<?php
if (isset($_SESSION['userId'])) {
	header ('Location: login');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin dashboard</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/login.css">
</head>
<body>
	<div class="container">
		<form class="form-signin" action="login" method="POST">
			<h3 class="form-signin-heading">Введите ваше данные</h3>
			<input type="text" name="email" class="form-control" placeholder="Email" autofocus>
			<input type="password" name="password" class="form-control" placeholder="Password">
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Войти</button>

			<p style="padding-top: 10px">
				<?php
				if (isset($_SESSION['errorString'])) {
					echo $_SESSION['errorString'];
					unset ($_SESSION['errorString']);
				}
				?>
			</p>
			<p style="padding-top: 10px"><a href="../">Web site</a></p>
		</form>
	</div>
</body>
</html>