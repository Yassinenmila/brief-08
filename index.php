<?php 
session_start();

// declaration de la base de donner 
require_once __DIR__."/data/SGBD.php";

// modules configuration 
require_once __DIR__."/moduls/conf.php";

// library php
require_once __DIR__."/./assets/library.php";

// routage des page 
require_once __DIR__."/router.php";









// affichage de contenu 
require_once __DIR__."/parts/layout.php";
?>