<?php

namespace src\App\model;

use src\App\model\Conexao;
use PDO;

//model para buscar usuarios válidos no banco
class BuscaUsuarios extends Conexao{

    public function getUsuarios($nome, $senha){

        $stmt = parent::db()->prepare('SELECT * FROM usuarios WHERE nomeUser = :nome AND senhaUser = :senha');

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":senha", $senha);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}