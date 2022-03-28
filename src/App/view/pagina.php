<?php
session_start();
           
//verificação se o indice enviar possui dentro do post
//impedir de acessar a página através da url
if(isset($_POST['enviar'])){
    header('Location: http://localhost:8000/src/App/view/login.php');
}

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../config.php';

/* 
    Controller
*/
use \src\App\controller\VerificaUsuariosController;

VerificaUsuariosController::getUsuarios();

$usuario = $_SESSION['user'][0]['nomeUser'];

echo "<h1>Olá {$usuario} </h1>";

?>

<!--botão sair-->
<button type="button" name="sair" value="sair" onclick="Logout()">Sair</button>

<script>
    //função para destroir a seção existente e fazer o redirecionamento
    function Logout(){
        <?php session_destroy();
        ?>
        window.location.replace("http://localhost:8000/src/App/view/login.php");
    }
</script>
