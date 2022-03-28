<?php

namespace src\controller;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../config.php';

use src\App\model\Cadastro;
/*
    Model
*/
$home = new Cadastro;

$nome = $_POST['nomeUser'];
$sobrenome = $_POST['sobrenomeUser'];
$senha = $_POST['senhaUser'];

// classe para levar dados de cadastro no banco de dados
class CadastroController{

    public function cadUsuario(){
        global $nome, $sobrenome, $senha;

        Cadastro::insereUsuario($nome, $sobrenome, $senha);

        return self::redirecionaLogin();
    }

    //redirecionamento para a página de login depois do cadastro
    public static function redirecionaLogin(){
        ?>
        <script>
            window.location.replace("http://localhost:8000/src/App/view/login.php");
        </script>

        <?php
    }
}

CadastroController::cadUsuario();