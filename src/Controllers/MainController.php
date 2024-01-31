<?php namespace Atxy2k\Controllers;

use Atxy2k\Infrastructure\BaseController;

class MainController extends BaseController
{
    public function index(){
        header('Location: /todo-list/index');
        die();
    }
}