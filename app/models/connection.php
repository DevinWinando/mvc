<?php

class Connection{
    private $dbh,
            $host = 'mysql:host=localhost',
            $dbname = 'dbname=mvc';

    public function __construct()
    {
        try{
            $this->dbh = new PDO($this->host, $this->dbname, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}