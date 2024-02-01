<?php 

use Atxy2k\Infrastructure\Router;
use Atxy2k\Controllers\TodosController;
use Atxy2k\Controllers\MainController;

$router = new Router();

$router->addRoute('/', MainController::class, 'index');
$router->addRoute('/todo-list/index', TodosController::class,'index');
$router->addRoute('/todo-list/add', TodosController::class,'add');
$router->addRoute('/todo-list/store', TodosController::class,'store');