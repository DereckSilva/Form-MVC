<?php

namespace src\App\controller;
session_start();

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../config.php';

//obtendo dados do meu formulario
$nome = $_POST['nomeUser'];
$senha = $_POST['senhaUser'];

/*
    Model
*/
use src\App\model\BuscaUsuarios;

$home = new BuscaUsuarios;

class VerificaUsuariosController{

    public static $dados;

    //buscar usuarios para devolver para a view
    public static function getUsuarios(){

        global $nome, $senha;

        if(sizeof(BuscaUsuarios::getUsuarios($nome, $senha)) > 0){
            
           $_SESSION['user'] = BuscaUsuarios::getUsuarios($nome, $senha); 

           return $_SESSION['user'];
        }

        //não encontra valor no banco de dados
        if(empty($_SESSION['user'][0]['nomeUser']) and empty($_SESSION['user'][0]['senhaUser'])){
            ?>
            <script>
             window.location.replace("http://localhost:8000/src/App/view/login.php");
            </script>
            <?php
        }
    }

    //redirecionamento para a página do usuário
    public static function redireciona(){
        global $nome, $senha;
            
        if($nome === $_SESSION['user'][0]['nomeUser'] and  $senha === $_SESSION['user'][0]['senhaUser']){
            ?>
            <script>
             window.location.replace("http://localhost:8000/src/App/view/pagina.php");
            </script>
            <?php
        }
    }

}

//chamando os métodos para serem executados

VerificaUsuariosController::getUsuarios();
VerificaUsuariosController::redireciona();

