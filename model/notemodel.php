<?php
class notemodel
{
    private $table = 'note';
    private $conn;
    public function __construct()
    {
    }

    public function getConnection()
    {
        $dbObj = new DB();
        $this->conn = $dbObj->conn;
    }

    public function getProd()
    {
        $this->getConnection();
        $sql = "Select * from productos";
        $smtp = $this->conn->prepare($sql);
        $smtp->execute();
        return $smtp->fetchAll();
    }
}
