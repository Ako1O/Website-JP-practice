<?php
    session_start();
    require "php/database.php";
    $db = new Database();

    $sql = "SELECT * FROM Dyelog.products ORDER BY ID_Products ASC";
    $parm = array();
    $products = $db->get_all($sql, $parm);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/store.css">
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
					<p class="info-title">Каталог</p>
				</div>
			</div>

			<!-- product-block -->

			<div class="product-block">
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
		</section>	
	<hr size="4px" color="#CA0021">
	<?php include("footer.php"); ?>
</body>
</html>