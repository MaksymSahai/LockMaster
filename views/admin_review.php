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
	<div id="wrapper">
		<div class="admin-header">
			<h1>Привет, Админ</h1>
			<a class="exit" href="/admin/exit">Выход</a>
		</div>
		<h2>Таблица Отзывов</h2>
		<table style="width:100%;">
			<tr style="margin-bottom: 10px;">
				<th style="width:124px;">Имя</th>
				<th style="width:650px;">Отзыв</th>
				<th style="width:100px;">Дата</th>
				<th style="width:150px;">Действия</th>
			</tr>
			<tr><td colspan="4">&nbsp</td></tr>
			<tr><th colspan="4"><center>Не подтвержденные отзывы</center></th></tr>
				<?php foreach ($reviewsListNoAprove as $reviewsItem): ?>
					<tr>
						<td><?php echo $reviewsItem['review_name']?></td>
						<td><?php echo $reviewsItem['review']?></td>
						<td><?php echo $reviewsItem['review_date']?></td>
						<td>
							<button class="btn-upd reviews-block-action" name="id" data-id="<?php echo $reviewsItem['review_id']?>" >Подтвердить</button></br>
							<button class="btn-del reviews-block-action" name="id" data-id="<?php echo $reviewsItem['review_id']?>" >Удалить</button>
						</td>
					</tr>
				<?php endforeach; ?>
				<tr><th colspan="4" align="center"><center>Подтвержденные отзывы</center></th></tr>
				<?php foreach ($reviewsList as $reviewsItem): ?>
					<tr>
						<td><?php echo $reviewsItem['review_name']?></td>
						<td><?php echo $reviewsItem['review']?></td>
						<td><?php echo $reviewsItem['review_date']?></td>
						<td>
							<button class="btn-del reviews-block-action" name="id" data-id="<?php echo $reviewsItem['review_id']?>" >Удалить</button>
						</td>
					</tr>
				<?php endforeach; ?>
		</table>
		
		
		</div>
		
	</div>
		<script src="/public/js/jquery-1.12.3.min.js"></script>
		<script src="/public/js/admin-script.js"></script>
	</body>
</html>