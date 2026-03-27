<?php include 'head.html';?>

<main class="container">
<?php 
$page = $_GET["categorie"];
include $page . '.php';
?>
</main>

<?php include 'foot.html';?>
