
<?php require 'database.php'; ?>
<?php include 'top.html';?>

<main class="container">
<?php 
if(empty($_GET["category"])){
    $page = 'home';
}
else{
    $page = $_GET["category"];
}

include $page . '.php';
?>
</main>

<?php include 'bottom.html';?>
