<?php

$slug = $_GET['item'];
// var_dump($slug);die;
$sql = "SELECT * FROM item where slug = '$slug'"; // NEVER DO THIS

$statement = $pdo->query($sql);
$item = $statement->fetch();
?>

<img width=200 src="<?= $item['main_image']?>" alt="Chaussette akdjasl;dkjalsd">
<h1><?= $item['label']?></h1>


<section>
    <h2>Specifications</h2>
    <ul>
        <li>Status: <?= $item['status']?></li>
        <li>Category: <a href="index.php?category=<?= $item['category_id']?>"><?= $item['category_id']?></a></li>
        <li>Theme: <?= $item['theme_id']?></li>
    </ul>
    <p><?= $item['short_description']?></p>
</section>