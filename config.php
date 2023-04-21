<?php

class Config
{
    private $DBHOST = 'localhost';
    private $DBUSER = 'root';
    private $DBPASS = '';
    private $DBNAME = 'fecth_crud_app';

    protected $conn = null;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->DBHOST . ';dbname=' . $this->DBNAME;

        try {
            $this->conn = new PDO($dsn, $this->DBUSER, $this->DBPASS);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}

?>
