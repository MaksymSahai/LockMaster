<?php include_once ROOT.'/views/layout/header.php'?>
			<div class="about-us">
				<p class="title t-about">Мы это...</p>
				<section class="arrow-top-section">
					<div class="arrow arrow-top"></div>
					<div class="arrow arrow-top" id="midle"></div>
					<div class="arrow arrow-top" id="third"></div>
				</section>
				
					<section>
						<div class="time">
							<p class="title t-time">Гарантия времени</p>
							<div class="img img-time"></div>
						</div>
					
					
						<div class="servis">
							<p class="title t-servis">Гарантия качества</p>
							<div class="img img-servis"></div>
						</div>
					
					
						<div class="security">
							<p class="title t-security">Гарантия безопастности</p>
							<div class="img img-security"></div>
						</div>
					</section>
				
			</div>
			<div class="nav-menu">
				<p class="title t-nav-menu">Чем мы занимаемся...</p>
				<section class="arrow-nav-section">
					<div class="arrow arrow-nav" id="arrow-1"></div>
					<div class="arrow arrow-nav" id="arrow-2"></div>
					<div class="arrow arrow-nav" id="arrow-3"></div>
					<div class="arrow arrow-nav" id="arrow-4"></div>
					<div class="arrow arrow-nav" id="arrow-5"></div>
				</section>
				<?php include_once ROOT.'/views/layout/menu.php'?>
			</div>
			<?php include_once ROOT.'/views/layout/howit.php'?>
			<div class="reviews">
				<a href="/review" class="title t-review">Отзывы о нас...</a>
				<section class="review-section">
					<div>
						<div class="img save"></div>
						<div class="review">
							<p class="review-name"><?php echo $twoLastReviews[0]['review_name'] ?><p>
							<p class="review-text" id="first-review">
								<?php echo $twoLastReviews[0]['review']?>
							</p>
							<p class="review-date">(<?php echo $twoLastReviews[0]['review_date']?>)</p>
						</div>
					</div>
					<div>
						<div class="review">
							<p class="review-name"><?php echo $twoLastReviews[1]['review_name'] ?><p>
							<p class="review-text" id="second-review">
								<?php echo $twoLastReviews[1]['review']?> 
							</p>
							<p class="review-date">(<?php echo $twoLastReviews[1]['review_date']?>)</p>
						</div>
						<div class="img keys"></div>
					</div>
				</section>
				<center><div class="write-review"><a href="/review">Написать отзыв</p></div></center>
			</div>
			
<?php include ROOT.'/views/layout/footer.php'?>