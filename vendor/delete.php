<?php
require_once 'D:\PHP\htdocs\learning\config\connect.php';

$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM products WHERE `products`.`id` = '$id'");

header('Location: /learning/index.php');
exit();
