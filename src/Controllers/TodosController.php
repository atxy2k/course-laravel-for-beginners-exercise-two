<?php namespace Atxy2k\Controllers;

use Atxy2k\Infrastructure\BaseController;
use Atxy2k\Models\Todo;

class TodosController extends BaseController {

    public function index(){
        #$todo = new Todo('My second title', 'long description');
        #$todo->save();
        #$todo = (new Todo())->find(1);
        $todos = (new Todo())->all();
        return $this->render('todos\\index', compact('todos'));
    }

    public function add(){
        return $this->render('\\todos\\add');
    }

    public function store(){
        $data = $this->request->all();
        $todo = new Todo(
            $data['title'],
            $data['description'],
            isset($data['completed']) && $data['completed'] == 1
        );
        $todo->save();
        header('Location: /todo-list/index'); die();
    }

}