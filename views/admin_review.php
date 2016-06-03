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
		<div class="list-review">
		<p class="reviews-block-id">Номер</p>
		<p class="reviews-block-name">Имя</p>
		<p class="reviews-block-text">Отзыв</p>
		<p class="reviews-block-date">Дата</p>
		<p>Действия</p>
		<?php foreach ($reviewsListNoAprove as $reviewsItem): ?>
				<div class="reviews-block my-item" >
					<p class="reviews-block-id" ><?php echo $reviewsItem['review_id']?></p>
					<p class="reviews-block-name"><?php echo $reviewsItem['review_name']?></p>
					<p class="reviews-block-text"><?php echo $reviewsItem['review']?></p>
					<p class="reviews-block-date"><?php echo $reviewsItem['review_date']?></p>
				</div>
				<a class="btn-upd" name="id" data-id="<?php echo $reviewsItem['review_id']?>" href="/admin/review-update">Подтвердить</a>
				<a class="btn-del" name="id" data-id="<?php echo $reviewsItem['review_id']?>" href="/admin/review-delete">Удалить</a>
				<hr>
			<?php endforeach; ?>
			<?php foreach ($reviewsList as $reviewsItem): ?>
				<div class="reviews-block">
					<p class="reviews-block-id" data-id="<?php echo $reviewsItem['review_id']?>"><?php echo $reviewsItem['review_id']?></p>
					<p class="reviews-block-name"><?php echo $reviewsItem['review_name']?></p>
					<p class="reviews-block-text"><?php echo $reviewsItem['review']?></p>
					<p class="reviews-block-date"><?php echo $reviewsItem['review_date']?></p>
				</div>
				<a class="btn-del" data-id="<?php echo $reviewsItem['review_id']?>" href="#">Delete</a>
				<hr>
			<?php endforeach; ?>
		</div>
		
	</div>
		<script src="/public/js/jquery-1.12.3.min.js"></script>
		<script src="/public/js/admin-script.js"></script>
	</body>
</html>