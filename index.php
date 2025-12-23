<?php 
session_start();

require_once __DIR__."/data/SGBD.php";

require_once __DIR__."/./assets/library.php";

require_once __DIR__."/router.php";

$router= new router();

$page=$router->run();





require_once __DIR__."/parts/layout.php";

?>