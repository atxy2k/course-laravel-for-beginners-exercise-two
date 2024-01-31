<?php namespace Atxy2k\Models;



class Todo{
    public string $title;
    public string $description;
    public bool $completed = false;

    public function __construct(string $title, string $description, bool $completed = false)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
    }

}