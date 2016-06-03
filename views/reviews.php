<?php include_once ROOT.'/views/layout/header.php'?>
			<div class="nav-menu">
				<p class="title t-nav-menu">Чем мы занимаемся...</p>
				<?php include_once ROOT.'/views/layout/menu.php'?>
			</div>
			<div class="send-review" >
				<p class="send-review-title title">Оставить отзыв</p>
				<form id="contact" method="POST" action="/review">
					<div id="note"></div>
					<div id="fields">
						<p class="title send-review-subtitle">Представтесь</p>
						<input class="send-review-name" name="name" id="name" type="text" maxlength="50" placeholder="Введите Ваше имя" /></br>
						<p class="title send-review-subtitle">Ваш отзыв</p>
						<textarea class="send-review-text" id="text" name="text" cols="40" rows="3" maxlength="2048" placeholder="Введите текст отзыва..."></textarea></br>
						<center><input class="send-review-button" type="submit" value="Отправить" /></center>
					</div>
				</form>
			</div>
			<div class="title send-review-title">Отзывы о нас</div>
			<?php foreach ($reviewsList as $reviewsItem): ?>
				<div class="reviews-block">
					<p class="reviews-block-name"><?php echo $reviewsItem['review_name']?></p>
					<p class="reviews-block-text"><?php echo $reviewsItem['review']?></p>
					<p class="reviews-block-date"><?php echo $reviewsItem['review_date']?></p>
				</div>
			<?php endforeach; ?>
		
	<?php include ROOT.'/views/layout/footer.php'?>