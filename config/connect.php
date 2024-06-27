<?php

$connect = mysqli_connect('localhost', 'root', '', 'crud_products');

if (!$connect) {
    die('Error! No connection. ' . mysqli_connect_error());
}
