<main class="container"> 

<?php
/*
http://dev.sandbox/lpb-blog/superglobal.php?color=red
http://dev.sandbox/lpb-blog/superglobal.php?color=red&color=green
http://dev.sandbox/lpb-blog/superglobal.php?color=red;color=green&name=bouli
http://dev.sandbox/lpb-blog/superglobal.php?color_primary=red&color_secondary=red


http://dev.sandbox/lpb-blog/index.php?page=world
http://dev.sandbox/lpb-blog/index.php?id=world
http://dev.sandbox/lpb-blog/index.php?doc=world
http://dev.sandbox/lpb-blog/index.php?theme=world


*/


var_dump('get', $_GET);
var_dump('post', $_POST);
var_dump('all', $_REQUEST);

?>
</main>