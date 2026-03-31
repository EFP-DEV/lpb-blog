<?php include 'top.html';?>

<main class="container">
<?php 
$page = $_GET["categorie"];
include $page . '.php';
?>
</main>

<?php include 'bottom.html';?>
