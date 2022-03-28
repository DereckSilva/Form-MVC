<?php

namespace src\App\model;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../config.php';

//levar a conexão do meu banco para outras classes
class Conexao{

    protected function db(){
        global $db;

        return $db;
    }
}