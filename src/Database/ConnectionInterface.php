<?php namespace Atxy2k\Database;

interface ConnectionInterface{
    public function connection();
    public function connect();
    public function initialize();
    public function disconnect();
    public function lastId() : int;
}