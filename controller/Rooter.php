<?php

class Rooter{
    public static function route($page)
    {
        if (!empty($page)) return './view/'.$page.'.php';
    }
}