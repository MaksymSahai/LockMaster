<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
		<meta charset="utf-8">
		<link href="/public/css/normalize.css" rel="stylesheet" type="text/css"/>
		<link href="/public/css/style.css" rel="stylesheet" type="text/css"/>
		<title>LockMaster| Аварийное открытие замков</title>
	</head>
	<body>
		<h1>Привет, Админ</h1>
		<a href="/admin/exit">Выход</a>
		<?php foreach ($reviewsListNoAprove as $reviewsItem): ?>
				<div class="reviews-block">
					<p class="reviews-block-name"><?php echo $reviewsItem['review_name']?></p>
					<p class="reviews-block-text"><?php echo $reviewsItem['review']?></p>
					<p class="reviews-block-date"><?php echo $reviewsItem['review_date']?></p>
				</div>
				<button name="aprove">Подтвердить</button>
				<button name="delete">Удалить</button>
			<?php endforeach; ?>
			<?php foreach ($reviewsList as $reviewsItem): ?>
				<div class="reviews-block">
					<p class="reviews-block-name"><?php echo $reviewsItem['review_name']?></p>
					<p class="reviews-block-text"><?php echo $reviewsItem['review']?></p>
					<p class="reviews-block-date"><?php echo $reviewsItem['review_date']?></p>
				</div>
				<button name="delete">Удалить</button>
			<?php endforeach; ?>
		<div class="footer">
			<p>@copywrite All rights are reserved 2016</p>
		</div>
	</body>
</html>