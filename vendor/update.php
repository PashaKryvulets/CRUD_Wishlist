<?php
require_once 'D:\PHP\htdocs\learning\config\connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

$product = mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `products`.`id` = '$id'");

header('Location: /learning/index.php');
exit();
