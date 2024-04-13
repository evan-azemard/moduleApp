<?php
//Add a module to my bdd
include 'Db.php';

class ModuleAdd extends Db{
    public static function addModule($name,$type){
        (new Db)->insertData($name,$type);
    }
}