<?php
include 'Db.php';

class Api extends Db{
    public function __construct($id)
    {
       $json = (new Db)->JsonDatasModules($id);

        $file_path = './api/file.json';
        file_put_contents($file_path, $json);
    }
}