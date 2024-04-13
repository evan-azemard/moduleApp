<?php
// Connect my db by PDO and use the query here (for simplicity)

class Bdd
{
    private $pdo;

    public function __construct(){

        try {
            return $this->pdo = new PDO('mysql:host=localhost;dbname=moduleapp;charset=utf8', 'root', '');
        }catch (Exception $e){
            die($e);
        }
    }

    protected function insertData($name, $type){
        $sql = "INSERT INTO modules (name, type) VALUES (:name, :type)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        $stmt->execute();
    }
}