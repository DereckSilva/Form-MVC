<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

//acessando os arquivo com os dados do banco
$arquivo = __DIR__ . '/config/config.yml';

//pegando o conteúdo de configuração do banco de dados
$config = file_get_contents($arquivo);

//parseando o arquivo YAML para um array
$getConfig = Yaml::parse($config, Yaml::PARSE_CONSTANT);

//configuração para acesso ao banco 
$dsn = 'mysql:host='. $getConfig['database']['host'] . 
        ';port=' . $getConfig['database']['port'] . 
        ';dbname=' . $getConfig['database']['dbname']. ';';

try{

    $db = new PDO($dsn, $getConfig['database']['user'], $getConfig['database']['password']);
    
}catch(PDOException $e){
    echo "ERRO NA CONEXÃO COM O BANCO " . $e->getMessage();
}

