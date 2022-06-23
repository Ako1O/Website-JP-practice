<?php
    session_start(); //запуск сессии
    require "php/database.php"; //подключение БД
    $db = new Database(); //присвоение БД

    $sql = "SELECT * FROM Dyelog.products, Dyelog.basket WHERE products.ID_Products = basket.ID_Products AND basket.ID_Clients = :id";
    $parm = array("id"=>($_SESSION['user']['ID_Clients']));
    $products = $db->get_all($sql, $parm); 

    if(isset($_POST["Client_surname"]) && isset($_POST["Client_name"]) && isset($_POST["Client_phone"])){

            $sql = "INSERT INTO Dyelog.orders (ID_Client, Order_token) VALUES (:ID_Clients, :Order_token)";
            $num = '0123456789abcdefghijklmnopqrstuvwxyz';
            $parm = array(
                "ID_Clients" => $_SESSION['user']['ID_Clients'],
                "Order_token" => substr(str_shuffle($num), 0, 6));
        $db->add($sql, $parm);
        header('Location: profile.php');

        $_SESSION['message'] = 'Заказ оформлен, ожидайте.';
}
?>   

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/ordering.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Dyelog</title>
</head>
<body>
<?php include("header.php"); ?>
	<main>
		<section>
		
		<!-- ordering block -->
		<div class="ordering">
			<div class="login-block">
				<h1>Детали заказа</h1>
				<div class="login-input"> 
				<form action="#" method="POST">
                        <p class="insert_text"> Фамилия</p>
                        <div class="login-single">
                        <input class="login-email" name="Client_surname" placeholder="" type="text"  autocomplete="off" required> </div>

                        <p class="insert_text"> Имя </p>
                        <div class="login-single">
                        <input class="login-email" name="Client_name" placeholder="" type="text" autocomplete="off" required> </div>

                        <p class="insert_text"> Номер телефона </p>
                        <div class="login-single">
                        <input class="login-email" name="Client_phone" placeholder="+7(___)___-__-__" type="text" minlength="12" maxlength="16" autocomplete="off" autocomplete="off" required> </div>

                        <input type="submit" class="submit" value="Оформить" onclick="alertFunction()"/>
                    </form> </div>
				
		</div>
		</section>	
	<hr size="4px" color="#CA0021">
	<?php include("footer.php"); ?>]
</body>
</html>