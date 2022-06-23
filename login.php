<?php
    session_start();
    require "php/db.php";
    if (!empty($_SESSION['user'])) {  
    header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Dyelog</title>
</head>
<?php include("header.php"); ?>
	<main>

        <?php
        //Проверка
        if(isset($_POST["Client_email"]) && isset($_POST["Client_password"])) { /*Иф для првоерки */
            $sql = "SELECT * FROM Dyelog.clients WHERE Client_email = :Client_email AND BINARY Client_password = :Client_password";
            $query = $pdo->prepare($sql);
            // описываем массив
            $query->execute(array(
                "Client_email" => $_POST["Client_email"],
                "Client_password" => md5($_POST["Client_password"])));
            if($query->rowCount() == 1) {
                $user = $query->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['user'] = [ 
                        "ID_Clients" => $user['ID_Clients'],
                        "Client_email" => $user['Client_email'],
                        "Client_phone" => $user['Client_phone'],
                        "Client_password" => $user['Client_password'],
                        "Client_surname" => $user['Client_surname'],
                        "Client_name" => $user['Client_name']
                    ];
                $_SESSION['message'] = 'Вы успешно авторизированы';
                header("Location: profile.php");
            }
            else { 
                $_SESSION['message'] = 'Неверный логин или пароль';
                include("php/auth.php");   
            }
        }
        else {
            include("php/auth.php");
        }
    ?>   
	<hr size="4px" color="#CA0021">
	<?php include("footer.php"); ?>
</body>
</html>