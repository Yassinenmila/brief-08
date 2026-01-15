<?php 
// Exécuter le contrôleur d'abord (peut faire des redirections avec header + exit)
require_once __DIR__."/../controler/".$page.".php";

// Si on arrive ici, c'est qu'il n'y a pas eu de redirection
// On peut maintenant inclure le header, la vue et le footer
require_once __DIR__."/../parts/header.php";

require_once __DIR__."/../views/".$page.".views.php";

require_once __DIR__."/../parts/footer.php";
?>