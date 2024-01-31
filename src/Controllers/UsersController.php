<?php namespace Atxy2k\Controllers;

use Atxy2k\Infrastructure\BaseController;
use Atxy2k\Models\User;

class UsersController extends BaseController
{
    public function index(){
        $users = [
            new User('Ivan Alvarado','ivan.alvarado@serprogramador.es'),
            new User('Guadalupe Tun','inariama.lu@gmail.com')
        ];
        return $this->render('users/index', compact('users'));
    }
}