<?php namespace Atxy2k\Infrastructure;

class BaseController{
    protected function render($view, array $data = []) : string{
        extract($data);
        ob_start();
        include(__DIR__ . "\\..\\views\\$view.view.php");
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
}