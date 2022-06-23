<?php
    session_start(); //запуск сессии
    if(isset($_POST["Client_email"]) && isset($_POST["Client_password"])){

        require "PHP/database.php"; //подключение БД
        $db = new Database(); //присвоение БД 
        
        $sql = "INSERT INTO Dyelog.clients (Client_email, Client_phone, Client_password, Client_surname, Client_name, Client_middlename) VALUES (:Client_email, :Client_phone, :Client_password, :Client_surname, :Client_name, :Client_middlename)"; //ввод данных клиента

        $parm = array( //параметры 
            "Client_email" => $_POST["Client_email"],
            "Client_surname" => $_POST["Client_surname"],
            "Client_name" => $_POST["Client_name"],
            "Client_middlename" => $_POST["Client_middlename"],
            "Client_phone" => $_POST["Client_phone"],    
            "Client_password" => md5($_POST["Client_password"])); //Шифрование

        $db->add($sql, $parm); //выполнение запроса
        header('Location: login.php'); //переадресация

    if ($_SESSION['user']) {
        header('Location: account.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Dyelog</title>
</head>
<body>
<?php include("header.php"); ?>
	<main>
		<section>
		
		<!-- registration block -->

		<div class="login-block">
			<h1>Регистрация</h1>
			<div class="login-input">

			</div>
			 <form class="login-bl" action="#" method="POST">
                        <p class="insert_text"> Фамилия </p>
						<div class="login-email">
                        <input class="login-email" name="Client_surname" placeholder="Херсонец" type="text" autocomplete="off" minlength="2" maxlength="25" onkeypress="noDigits(event)" required> </div>

                        <p class="insert_text"> Имя </p>
						<div class="login-email">
                        <input class="login-email" name="Client_name" placeholder="Даниил" type="text" autocomplete="off" minlength="2" maxlength="25" onkeypress="noDigits(event)" required> </div>

                        <p class="insert_text"> Отчество </p>
						<div class="login-email">
                        <input class="insert" name="Client_middlename" placeholder="Михайлович" type="text" autocomplete="off" minlength="2" maxlength="25" onkeypress="noDigits(event)" required> </div>

                        <p class="insert_text"> Gmail </p>
						<div class="login-email">
                        <input class="insert" type="email" name="Client_email" placeholder="@gmail.com" autocomplete="off" required> </div>

                        <p class="insert_text"> Телефон </p>
						<div class="login-email">
                        <input class="insert" name="Client_phone" placeholder="+7 964 779 92 22" type="text" minlength="12" maxlength="16" autocomplete="off" id="phone" required> </div>

                        <p class="insert_text"> Пароль </p>
						<div class="login-email">
                        <input class="insert" name="Client_password" placeholder="*******************" type="password" autocomplete="off" required> </div>

			<div class="login-caption">
				<p>
					Нажав «Зарегистрироваться», я принимаю условия клиентского соглашения и политики конфиденциальности
				</p>
				<a href="login.php">
					Если вы уже «Зарегистрированы», нажмите сюда, чтобы войти
				</a>
			</div>
            <button type="submit" class="submit" onclick="alertFunction()">Зарегистрироваться</button>
		</div>	
		                    </form> 
		</section>	
	<hr size="4px" color="#CA0021">
	<?php include("footer.php"); ?>
</body>
</html>