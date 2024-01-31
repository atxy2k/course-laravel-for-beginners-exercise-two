<?php 

use Atxy2k\Infrastructure\Router;
use Atxy2k\Controllers\UsersController;

$router = new Router();

$router->addRoute('/', UsersController::class, 'index');