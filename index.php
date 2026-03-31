
<?php require 'database.php'?>
<?php include 'top.html';?>

<main class="container">
<?php 
if(empty($_GET)){
    $page = 'home';
}
elseif(isset($_GET["category"])){
    $page = $_GET["category"];
}
elseif(isset($_GET['item'])){
    $page = 'item';
}

include $page . '.php';
?>
</main>

<?php include 'bottom.html';?>
