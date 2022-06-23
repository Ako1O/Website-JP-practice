<?php
    session_start();
    require "php/database.php"; //подключение БД
    $db = new Database(); //присвоение БД
    $sql = "INSERT INTO Dyelog.basket (ID_Clients, ID_Products) VALUES (:ID_Clients, :ID_Products)";

    $parm = array(
        "ID_Clients" => $_SESSION['user']['ID_Clients'],
        "ID_Products" => $_GET["id"]);

    $db->add($sql, $parm);
    header('Location: basket.php');
?>   