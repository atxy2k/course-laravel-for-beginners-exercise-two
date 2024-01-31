<?php namespace Atxy2k\Infrastructure;

class BaseController{

    protected Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    protected function render($view, array $data = []) : string{
        extract($data);
        ob_start();
        include(__DIR__ . "\\..\\views\\layout\\header.view.php");
        include(__DIR__ . "\\..\\views\\$view.view.php");
        include(__DIR__ . "\\..\\views\\layout\\footer.view.php");
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
}