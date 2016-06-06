<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
		<meta charset="utf-8">
		<link href="/public/css/normalize.css" rel="stylesheet" type="text/css"/>
		<link href="/public/css/admin-style.css" rel="stylesheet" type="text/css"/>
		<title>LockMaster| Аварийное открытие замков</title>
	</head>
	<body>
	<div class="wrap">
		<form class="login-form" method="post" action="/admin/process">
			<div class="login"><span>Логин</span></div></br>
			<input name="log" type="text"></br>
			<div class="login"><span>Пароль</span></div></br>
			<input name="pass" type="password"></br>
			<div class="login"><input type="submit" name="button"></div>
		</form>
	</div>
	</body>
</html>