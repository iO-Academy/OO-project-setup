<?php

namespace Example;

class DbConnector
{

    public function connect()
    {
        $db = new \PDO('mysql:host=db;dbname=robot_stores', 'root', 'password');
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $db;
    }

}
