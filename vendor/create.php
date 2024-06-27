<?php

require_once 'D:\PHP\htdocs\learning\config\connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");

header('Location: /learning/index.php');
exit();
