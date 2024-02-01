<?php namespace Atxy2k\Database;

use Atxy2k\Database\ConnectionInterface;
use SQLite3;

class SqliteConnection implements ConnectionInterface{
    
    private $connection;

    public function __construct()
    {
        $this->connect();
        $this->initialize();
    }

    public function connection(){
        return $this->connection;
    }

    public function connect(){
        if($this->connection == null)
        {
            $config = include( __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'config.php');
            $this->connection = new SQLite3((string) $config['sqlite_path']);
        }
        return $this->connection;
    }

    public function initialize(){
        $commands = [
            'CREATE TABLE IF NOT EXISTS todos( id INTEGER PRIMARY KEY, title TEXT NOT NULL, description TEXT NOT NULL, completed INT DEFAULT 0 );'
        ];
        foreach($commands as $command){
            $this->connection->exec($command);
        }
    }

    public function disconnect(){
        $this->connection->close();
    }

    public function lastId() : int {
        return $this->connection->lastInsertRowID();
    }

}