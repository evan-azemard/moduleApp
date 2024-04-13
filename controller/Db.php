<?php
// Connect my db by PDO and use the query here (for simplicity)

class Db
{
    private $pdo;

    public function __construct()
    {
        try {
            return $this->pdo = new PDO('mysql:host=localhost;dbname=moduleapp;charset=utf8', 'root', '');
        }catch (PDOException $e){
            die($e);
        }
    }

    protected function insertData($name, $type)
    {
        try {
            $sql = "INSERT INTO modules (name, type) VALUES (:name, :type)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':type', $type);
            $stmt->execute();
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    protected function selectModules()
    {
        try {
            $query = "SELECT * FROM modules";
            $statement = $this->pdo->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    protected function selectDatas()
    {
        try {
            $query = "SELECT datas.*, modules.name AS module_name FROM datas INNER JOIN modules ON datas.id_modules = modules.id";
            $statement = $this->pdo->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
}