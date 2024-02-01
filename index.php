<?php 
require_once './vendor/autoload.php';
$uri = $_SERVER['REQUEST_URI'];

require './src/routes.php';
?>
<?= $router->dispatch($uri); ?>