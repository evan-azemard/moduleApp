<?php
//Add a module to my bdd
include 'Bdd.php';

class ModuleAdd extends Bdd{
    public static function addModule($name,$type){
        (new Bdd)->insertData($name,$type);
    }
}