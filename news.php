<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/news.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Dyelog</title>
</head>
<body>
<?php include("header.php"); ?>
	<main>
		<section>
			<!-- headline -->

			<div class="info-headline">
				<div class="info-textblock">
					<p class="info-title">Новости</p>
				</div>
			</div>

			<!-- news-cards -->

			<div class="news-block">
				<div class="news-row">
					<a href="#">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2021-2022</p>
							<p class="news-caption">28.05.2022</p>
						</div>
						<img class="news-img" src="img/news1.png" alt="news1">
					</a>
				</div>
				<div class="news-row" id="news-center-card">
					<a href="#">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2021-2022</p>
							<p class="news-caption">28.05.2022</p>
						</div>
						<img class="news-img" src="img/news2.png" alt="news2">
					</a>
				</div>
				<div class="news-row">
					<a href="#">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2021-2022</p>
							<p class="news-caption">28.05.2022</p>
						</div>
						<img class="news-img" src="img/news3.png" alt="news3">
					</a>
				</div>
			</div>
			<div class="news-block">
				<div class="news-row">
					<a href="#">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2015-2018</p>
							<p class="news-caption">14.05.2022</p>
						</div>
						<img class="news-img" src="img/news4.png" alt="news4">
					</a>
				</div>
				<div class="news-row" id="news-center-card">
					<a href="#">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2012-2014</p>
							<p class="news-caption">12.05.2022</p>
						</div>
						<img class="news-img" src="img/news5.png" alt="news5">
					</a>
				</div>
				<div class="news-row">
					<a href="#">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2011-2013</p>
							<p class="news-caption">11.05.2022</p>
						</div>
						<img class="news-img" src="img/news6.png" alt="news6">
					</a>
				</div>
			</div>
		</section>
	</main>
	<hr size="4px" color="#CA0021">
	<?php include("footer.php"); ?>
</body>
</html>