<?php

class db
{
    private $host = 'localhost';
    private $dbname = 'lachanga';
    private $user = 'root';
    private $password = '';
    public function conexion()
    {
        try {
            #$conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
            return $PDO;
            #return $conn;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
