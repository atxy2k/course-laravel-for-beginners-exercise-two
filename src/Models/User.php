<?php namespace Atxy2k\Models;

class User{
    public $name;
    public $email;
    
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}