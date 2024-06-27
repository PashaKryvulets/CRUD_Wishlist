<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$user = $_POST['user'];
$body = $_POST['body'];

mysqli_query($connect, "INSERT INTO `comments` (`id`, `product_id`, `body`, `user`) VALUES (NULL, '$id', '$body', '$user')");

header('Location: ../product.php?id=' . $id);
