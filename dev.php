<h1>DEV</h1>


<?php

$stmt = $pdo->query('SELECT item.slug, item.label, category.slug as category_slug FROM item JOIN category ON category.id = item.category_id;');
echo '<section>';
while ($row = $stmt->fetch())
{
    echo '<article class="' . $row['category_slug'] . '"><a href="index.php?item=' . $row['slug'] . '">' . $row['label'] . '</a></article>';
}
echo '</section>';

?>