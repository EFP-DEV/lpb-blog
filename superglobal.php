<?php
/*
http://dev.sandbox/lpb-blog/superglobal.php?color=red
http://dev.sandbox/lpb-blog/superglobal.php?color=red&color=green
http://dev.sandbox/lpb-blog/superglobal.php?color=red;das&name=bouli
http://dev.sandbox/lpb-blog/superglobal.php?color_primary=red&color_secondary=green

http://dev.sandbox/lpb-blog/index.php?categorie=business

*/


var_dump('get', $_GET);
var_dump('post', $_POST);
var_dump('request', $_REQUEST);

?>