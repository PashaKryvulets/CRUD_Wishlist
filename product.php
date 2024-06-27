<?php

require_once 'D:\PHP\htdocs\learning\config\connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products`
 WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

$comments = mysqli_query($connect, "SELECT * FROM `comments`
 WHERE `product_id` = '$product_id'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        body {
            background-color: #222;
            color: #eee;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .product-container {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .product-container h2,
        .product-container h4,
        .product-container p {
            margin: 0 0 10px 0;
        }

        .comments-container {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
        }

        .comments-container h3 {
            margin-top: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background-color: #555;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        form {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        input[type="text"],
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

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="product-container">
        <h2>Title: <?= $product['title'] ?></h2>
        <h4>Price: <?= $product['price'] ?></h4>
        <p>Description: <?= $product['description'] ?></p>
    </div>

    <div class="comments-container">
        <h3>Comments</h3>
        <ul>
            <?php foreach ($comments as $comment) : ?>
                <li>
                    <strong><?= $comment['user'] ?>:</strong> <!-- Выводим никнейм -->
                    <?= $comment['body'] ?> <!-- Выводим сам комментарий -->
                </li>
            <?php endforeach; ?>
        </ul>
    </div>


    <div>
        <form action="../learning/vendor/create_comment.php" method="post">
            <h3>Leave a Comment</h3>
            <input type="hidden" name="id" value="<?= $product_id ?>">
            <input type="text" name="user" placeholder="Your name" required>
            <textarea name="body" placeholder="Your comment" rows="5" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>