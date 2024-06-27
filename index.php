<!-- crud -->

<?php

require_once '../learning/config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <h1>Basic CRUD program WISHLIST</h1>
</head>
<style>
    body {
        background-color: #333;
        /* Цвет фона */
        color: #fff;
        /* Цвет текста */
        font-family: Arial, sans-serif;
        /* Шрифт текста */
        padding: 20px;
        /* Отступы вокруг содержимого */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #444;
    }

    th {
        background: #555;
        /* Темнее */
        color: white;
    }

    form {
        margin-top: 20px;
    }

    input[type=text],
    input[type=number],
    textarea {
        width: calc(100% - 22px);
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border: 1px solid #555;
        border-radius: 5px;
        background-color: #444;
        color: #eee;
        box-sizing: border-box;
        resize: none;
    }

    button[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type=submit]:hover {
        background-color: #45a049;
    }

    .btn {
        padding: 6px 12px;
        border-radius: 4px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
    }

    .view-link {
        background-color: darkcyan;
        /* Желтый цвет */
        color: whitesmoke;
    }

    .update-link {
        background-color: orange;
        /* Желтый цвет */
        color: #333;
    }

    .delete-link {
        background-color: red;
        color: white;
    }

    .update-link:hover,
    .delete-link:hover {
        opacity: 0.8;
    }
</style>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        <?php
        $products = mysqli_query($connect, query: "SELECT * FROM `products`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product) {
        ?>
            <tr>
                <td><?= $product[0] ?></td>
                <td><?= $product[1] ?></td>
                <td><?= $product[2] ?></td>
                <td><?= $product[3] ?></td>
                <td><a class="btn view-link" href="product.php?id=<?= $product[0] ?>">View</a></td>
                <td><a class="btn update-link" href="update.php?id=<?= $product[0] ?>">Edit</a></td>
                <td><a class="btn delete-link" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <table...>
        <form action="../learning/vendor/create.php" method="post">
            <h3>Add new product</h3>
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="number" name="price" placeholder="Price" required> <br> <br>
            <button type="submit">Submit</button>
        </form>

</body>

</html>