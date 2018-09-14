<!DOCTYPE html>
<html>
<head>
	<title>Админ панель</title>
	<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
			<form class="form-admin" action="edit.php" method="POST">
				<div class="jumbotron">
					<div class="form-group">
						<label for="user">Пользователь</label>
						<input type="text" name="user" class="form-control" id="inputEmail" placeholder="Имя пользователя">

					</div>
					<div class="form-group">
						<label for="pass">Пароль</label>
						<input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Пароль">

					</div>
					<button type="submit" class="btn btn-primary">Войти</button>

				</div>
			</form>
</body>
</html>