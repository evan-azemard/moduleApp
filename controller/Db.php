<?php
//Connect my db by PDO and use the query here (for simplicity)

class Db
{
    private $pdo;

    //Connect Db
    public function __construct()
    {
        try {
            return $this->pdo = new PDO('mysql:host=localhost;dbname=moduleapp;charset=utf8', 'root', '');
        }catch (PDOException $e){
            die($e);
        }
    }

    //Add  new module on my Db
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

    //Select datas...
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
            $query = "SELECT datas.*, modules.name FROM datas JOIN modules ON datas.id_modules = modules.id";
            $statement = $this->pdo->query($query);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    //Return datas for one module and write on my class Api
    protected function JsonDatasModules($id) {
        $query = "SELECT modules.*, datas.* FROM modules JOIN datas ON modules.id = datas.id_modules WHERE modules.id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $result = $statement->fetchAll();

        return json_encode($result);
    }
}