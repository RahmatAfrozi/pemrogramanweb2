<?php

class koneksiDb{
    protected $username = 'root';
    protected $password = '';
    protected $host = 'localhost';
    protected $dbname = '';
    protected $connection;

    public function __construct($host, $username, $password, $dbname){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
    }

    public function __destruct()
    {
        $this->connection->close();
    }

    public function getConnection(){
        return $this->connection;
    }
}