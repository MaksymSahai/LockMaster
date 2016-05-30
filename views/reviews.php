<?php include_once ROOT.'/views/layout/header.php'?>
			<div class="nav-menu">
				<p class="title t-nav-menu" style="margin-bottom: 30px;">Чем мы занимаемся...</p>
				<section class="section-nav">
				<div>
					<a class="nav-item" href="#">Замки</a>
					<div class="img img-nav" id="key"></div>
					<ul class="nav-ul list-key">
						<li><a href="#">Открытие</a></li>
						<li><a href="#">Ремонт</a></li>
						<li><a href="#">Установка</a></li><!--попробывать два слова-->
						<li><a href="#">Замена</a></li>
					</ul>
				</div>
				<div>
					<a class="nav-item" href="#">Автомобили</a>
					<div class="img img-nav" id="avto"></div>
					<ul class="nav-ul list-avto">
						<li><a href="#">Открытие</a></li>
						<li><a href="#">Изготовление ключей</a></li>
					</ul>
				</div>
				<div>
					<a class="nav-item" href="#">Сейфы</a>
					<div class="img img-nav" id="save"></div>
					<ul class="nav-ul">
						<li><a href="#">Открытие</a></li>
					</ul>
				</div>
				<div>
					<a class="nav-item" href="#">Двери</a>
					<div class="img img-nav" id="door"></div>
					<ul class="nav-ul">
						<li><a href="#">Установка</a></li>
					</ul>
				</div>
				<div>
					<a class="nav-item" href="#">Другое</a>
					<div class="img img-nav" id="other"></div>
					<ul class="nav-ul">
						<li><a href="#">Вызов евакуатора</a></li>
						<li><a href="#">Установка МПК(окон)</a></li>
					</ul>
				</div>
			</section>
			</div>
			
			<?php foreach ($reviewsList as $reviewsItem): ?>
				<div>
					<h3><?php echo $reviewsItem['review_name']?></h3>
					<p><?php echo $reviewsItem['review_date']?></p>
					<p><?php echo $reviewsItem['review']?></p>
				</div>
				
			<?php endforeach; ?>
		
	<?php include ROOT.'/views/layout/footer.php'?>