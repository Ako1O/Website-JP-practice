<?php
    session_start(); //запуск сессии
    require "php/database.php"; //подключение БД
    $db = new Database(); //присваивание данной БД
?>   


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/basket.css">
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
					<p class="info-title">Корзина</p>
				</div>
			</div>

		<!-- profile section -->

		<h2>
			Товары и услуги
		</h2>
		<?php 
                if(!empty($_SESSION['user'])) { 
                    $sql = "SELECT * FROM Dyelog.products, Dyelog.basket WHERE products.ID_Products = basket.ID_Products AND basket.ID_Clients = :id"; 
                    $parm = array("id"=>($_SESSION['user']['ID_Clients']));
                    $products = $db->get_all($sql, $parm); 

                    $sql = "SELECT SUM(Products.Product_cost) AS Product_price FROM Dyelog.Products, Dyelog.basket WHERE products.ID_Products = basket.ID_Products AND basket.ID_Clients = :id";
                    $parm = array("id"=>($_SESSION['user']['ID_Clients']));
                    $sum = $db->get_all($sql, $parm);
                    ?>
		<div class="basket-block">
			<div class="basket-article">
			</div>
			<div class="basket-name">
				<ul>
					<li class="basket-column-name">
						<p>Наименование</p>
					</li>
					<?php foreach($products as $item): ?>
					<li>
						<p><?=$item["Product_name"]?></p>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="basket-amount">
				<ul>
					<li class="basket-column-name">
						<p>Колличество</p>
					</li>
					<li>
						<p>2</p>
					</li>
					<li>
						<p>1</p>
					</li>
					<li>
						<p>1</p>
					</li>
				</ul>
			</div>
			<div class="basket-cost">
				<ul>
					<li class="basket-column-name">
						<p>Цена</p>
					</li>
					<?php foreach($products as $item): ?>
					<li>
						<p>$ <?=$item["Product_cost"]?></p>
					</li>
					<?php endforeach; ?>

				</ul>
			</div>
		</div>
		<div class="basket-bottom">
				<div class="basket-bottom-text">
					<?php foreach($sum as $item): ?>
					<p>Итоговая сумма: $ <?=$item['Product_price']?></p>
					<?php endforeach; ?>
				</div>
				<div class="basket-bottom-button">
					<a href="ordering.php"><img src="img/basket_button.png" alt=""></a>
				</div>
			</div>
			        <?php } 

        else {
            $_SESSION['message'] = 'Авторизируйтесь для входа в систему';
            header('Location: login.php');
        } ?>
		</section>
	</main>	
	<hr size="4px" color="#CA0021">
	<?php include("footer.php"); ?>
</body>
</html>