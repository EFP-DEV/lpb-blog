<h1>DEV</h1>

<?php
$host = 'localhost';
$db   = 'lareponse';
$user = 'lareponse';
$pass = 'changeme0';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];


$pdo = new PDO($dsn, $user, $pass, $options);
var_dump($pdo);


$stmt = $pdo->query('SELECT item.slug, item.label, category.slug as category_slug FROM item JOIN category ON category.id = item.category_id;');
echo '<section>';
while ($row = $stmt->fetch())
{
    echo '<article class="' . $row['category_slug'] . '"><a href="index.php?item=' . $row['slug'] . '">' . $row['label'] . '</a></article>';
}
echo '</section>';

?>