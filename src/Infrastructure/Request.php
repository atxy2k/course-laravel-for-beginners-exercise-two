<?php namespace Atxy2k\Infrastructure;

class Request {
    
    private array $params;

    public function __construct()
    {
        $this->params = $_GET + $_POST;
    }

    public function all() : array {
        return $this->params;
    }

    public function get(string $value, string $default = null){
        return isset($this->params[$value]) ? $this->params[$value] : $default;
    }

}