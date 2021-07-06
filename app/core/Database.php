<?php

class Database{
    private $dbhost = Config::DB_HOST,
            $dbname = Config::DB_NAME,
            $dbuser = Config::DB_USER,
            $dbpass = Config::DB_PASS,
            $dbh,
            $statements;
            
            

    public function __construct()
    {
        $dsn = "mysql:host=$this->dbhost;dbname=$this->dbname";
        $option = [
            PDO::ATTR_PERSISTENT => TRUE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->dbuser, $this->dbpass, $option);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->statements = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if( is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        
        $this->statements->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->statements->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->statements->fetchAll(PDO::FETCH_ASSOC);
    }

    public function resultSingle()
    {
        $this->execute();
        return $this->statements->fetch(PDO::FETCH_ASSOC);
    }

    public function affectedRows()
    {
        return $this->statements->rowCount();
    }




}