<?php namespace Atxy2k\Controllers;

use Atxy2k\Infrastructure\BaseController;

class TodosController extends BaseController {

    public function index(){
        return $this->render('todos\\index');
    }

}