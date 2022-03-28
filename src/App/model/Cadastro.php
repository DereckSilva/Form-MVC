<?php

namespace src\App\model;

use src\App\model\Conexao;

//classe para a inserção de dados dentro do banco
class Cadastro extends Conexao{

    public function insereUsuario($nome, $sobrenome, $senha){

        $stmt = parent::db()->prepare('INSERT INTO usuarios (nomeUser, senhaUser, sobrenomeUser)
                                        VALUES (:nome , :senha , :sobrenome)');
        
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':sobrenome', $sobrenome);

        $stmt->execute();

    }
        

}