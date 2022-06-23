<?php
    session_start();
    require "php/database.php";
    $db = new Database();

    $sql = "SELECT * FROM Dyelog.products ORDER BY ID_Products ASC LIMIT 4";
    $parm = array();
    $products = $db->get_all($sql, $parm);

?> 

<!DOCTYPE html>
<html lang="en">	
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Dyelog</title>
</head>
<body>
<?php include("header.php"); ?>
	<main>
		<div class="main-container">
			<img class="main-image" src="img/main_bg.png" alt="bg">
			<div class="main-text">
				<h4>КОРЕЙСКИЕ & ЯПОНСКИЕ АВТОЗАПЧАСТИ</h4>
				<h5>DYELOG - НАШИ АВТОЗАПЧАСТИ ЖИВУТ ВЕЧНО</h5>
				<a href="store.php"><img src="img/katalog_button.png" alt="but"></a>
			</div>
		</div>
		<section>
			<!-- wheel-block headline -->

			<div class="info-headline">
				<div class="info-textblock">
					<p class="info-caption">ДОБРО ПОЖАЛОВАТЬ В</p>
					<p class="info-title">МАГАЗИН DYELOG</p>
				</div>
			</div>

			<!-- wheel-block -->

			<div class="wheel-block">
				<img src="img/main_wheel.png" alt="wheel">
				<div class="wheel-text">
					<p class="wheel-p1">Приветствуем</p>
					<p class="wheel-p2">Dyelog существует с 1928</p>
					<p class="wheel-p3">Магазин автозапчастей</p>
					<p class="wheel-p4">Компания «Dyelog» предлагает качественные оригинальные запчасти. Политика компании основана на понимании того, что автозапчасти к японским и корейским автомобилям должны быть только оригинальными и отвечать самым строгим требованиям производителя.
						<br><br>Благодаря большому ассортименту запчастей и аксессуаров можно купить все необходимое для автомобиля.</p>
				</div>
			</div>

			<!-- news-cards -->

			<div class="news-block">
				<div class="news-row">
					<a href="news.html">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2021-2022</p>
							<p class="news-caption">30.05.2022</p>
						</div>
						<img class="news-img" src="img/news1.png" alt="news1">
					</a>
				</div>
				<div class="news-row" id="news-center-card">
					<a href="news.htm">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2019-2021</p>
							<p class="news-caption">29.05.2022</p>
						</div>
						<img class="news-img" src="img/news2.png" alt="news2">
					</a>
				</div>
				<div class="news-row">
					<a href="news.htm">
						<div class="news-card">
							<p class="news-headline">Новые тренды 2020-2022</p>
							<p class="news-caption">20.05.2022</p>
						</div>
						<img class="news-img" src="img/news3.png" alt="news3">
					</a>
				</div>
			</div>

			<!-- product-block -->

			<div class="product-block">
				<img src="img/headline.png" class="headline_product" alt="border">
				<div class="product-caption">
					<p>
						Продукты представленные в популярных продуктах были выбраны исходя из статистики 
					</p>
				</div>
				<div class="popular-row">
					            <?php foreach($products as $item): ?>

					<div class="popular-card">
						<img class="product-img" src="img/<?=$item["Product_img"]?>" alt="product1">
						<hr size="4px" color="#D2D1D4">
						<div class="popular-title">
							<p><?=$item["Product_name"]?></p>
						</div>
						<hr size="4px" color="#D2D1D4">
						<div class="popular-caption">
							<p><?=$item["Product_description"]?></p>
						</div>
						<hr size="4px" color="#D2D1D4">
						<div class="popular-price">
							<p>$ <?=$item["Product_cost"]?></p>
						</div>
						<div class="product-button">
							<a href="/to_cart.php?id=<?=$item["ID_Products"]?>">
								<img src="img/product_button.png" alt="product_button">	
							</a>
						</div>
					</div>
				<?php endforeach; ?>
				</div>
			</div>

			

			<!-- map -->

			<div id="map-test" class="map"></div>
			<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU">
			</script>
			<script src="script.js"></script>
		</section>
	</main>
	<hr size="4px" color="#CA0021">
	<?php include("footer.php"); ?>
</body>
</html>