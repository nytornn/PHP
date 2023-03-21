<?php

require "IDB.php";

class MySQL implements IDB
{
    private $conn;

    public function connect(

        string $host = "",
        string $username = "",
        string $password = "",
        string $database = "",
    ): ?static
    {
        $this->conn = new mysqli($host, $username, $password, $database);

        if(!$conn){
            die("Connection failed!" . mysqli_connect_error());
        }
        echo "Connection success!";
        return $this;
    }
    public function select(string $query): array
    {   
        if(empty($query)){
            return [];
        }
        $data = mysqli_query($this->conn, $query);
        $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $data;
    }
    function insert(string $table, array $data): bool
    {
        if(empty($data)){
            return false;
        }
        $keys = array_keys($data);
        $values = array_values($data);

        mysqli_query($this->conn, "INSERT INTO $table($keys) VALUES('$values')");
        return $this;
    }
    function update(string $table, int $id, array $data): bool
    {  
        $keys = array_keys($data);

        mysqli_query($this->Sconn, "UPDATE $table SET $keys WHERE id=$id");
        return $this;
    }
    function delete(string $table, int $id): bool
    {
        if(empty($id || $table))
        {
            return false;
        }

        mysqli_query($this->conn, "DELETE FROM $table WHERE id=$id");
        return $this;
    }
}