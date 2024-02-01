<?php namespace Atxy2k\Models;
use Atxy2k\Database\SqliteConnection;

class Todo {

    protected string $table = 'todos';
    public int|null $id = null;
    public string|null $title;
    public string|null $description;
    public bool $completed = false;

    public function __construct(string $title = null, string $description = null, bool $completed = false, int|null $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
        if($id !== null) $this->id = $id;
    }

    public function save(){
        $db = new SqliteConnection();
        if($this->id === null)
        {
            $db->connection()->exec(vsprintf("INSERT INTO %s (title, description, completed) values ('%s', '%s', '%s')", [
                $this->table,
                $this->title,
                $this->description,
                (int) $this->completed
            ]));
            $this->id = $db->lastId();
        }
        else
        {
            $query = sprintf('select * from %s where id=:id', $this->table);
            $statement = $db->connection()->prepare($query);
            $statement->bindValue(':id', $this->id);
            $result = $statement->execute();
            var_dump($result->fetchArray());
        }
        $db->disconnect();
    }

    public function find(int $id) : ?Todo{
        $db = new SqliteConnection();
        $statement = $db->connection()->prepare(sprintf('select * from %s where id=:id limit 1',  $this->table ));
        $statement->bindValue(':id', $id);
        $result = $statement->execute();
        $data = $result->fetchArray();
        $db->disconnect();
        return new Todo(
            $data['title'],
            $data['description'],
            $data['completed'] === 1
        );
    }

    public function all() : Array{
        $items = [];
        $db = new SqliteConnection();
        $statement = $db->connection()->prepare(sprintf('select * from %s',  $this->table ));
        $result = $statement->execute();
        while($row = $result->fetchArray()){
            $items[] = new Todo(
                $row['title'],
                $row['description'],
                $row['completed'] === 1,
                $row['id']
            );
        }
        return $items;
    }

}