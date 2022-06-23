
<!DOCTYPE html>
<?php
    session_start();
    if (!$_SESSION['user']) {
    header('Location: ../login.php');
}
    require "php/database.php";
    $db = new Database();

    $sql = "SELECT * FROM Dyelog.clients";
    $parm = array();
    $client = $db->get_row($sql, $parm);
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Dyelog</title>
</head>
<body>
<?php include("header.php"); ?>
	<main>
		<section>
		
		<?php
                if (!empty($_SESSION['message'])) { //существует или нет
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p> <br>'; //вывод
                }
                unset($_SESSION['message']); //обнуление при перезагрузке
            ?>

		<h2>
			Профиль
		</h2>
		<div class="profile-block">
			<div class="profile-img"><img src="img/profile_img.png"></div>
			<div class="profile-title">
				<ul>
					<li>
						<p>Фамилия:</p>
					</li>
					<li>
						<p>Имя:</p>
					</li>
					<li>
						<p>Email:</p>
					</li>

				</ul>
			</div>
			<div class="profile-name">
				<ul>
					<li>
						<p><?=$_SESSION['user']['Client_surname']?></p>
					</li>
					<li>
						<p><?=$_SESSION['user']['Client_name']?></p>
					</li>
					<li>
						<p><?=$_SESSION['user']['Client_email']?></p>
					</li>
				</ul>
			</div>
		</div>
		<a href="logout.php"><button class="submit"> Выйти из аккаунта </button></a>
		</section>
	</main>	
	<hr size="4px" color="#CA0021">
	<?php include("footer.php"); ?>
</body>
</html>