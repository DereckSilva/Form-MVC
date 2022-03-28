<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="/public/css/estilo.css">
    <link href="https://cdn-icons-png.flaticon.com/512/295/295128.png" rel="icon" />
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="/src/App/controller/VerificaUsuariosController.php" method="POST" class="form-geral">
            <fieldset>
                <h1>Login Dev</h1>
                  <label><i class="fa fa-user" aria-hidden="true"></i></label><br>
                <input type="text" name="nomeUser" id="nomeUser" class="form-input" placeholder="Ex: Dereck"><br>
                <label><i class="fa fa-unlock" aria-hidden="true"></i></label><br>
                <input type="password" name="senhaUser" id="senhaUser" placeholder="*******" class="form-input"><br>
                <button type="submit" name="enviar" value="enviar" class="form-button">Acessar</button><br><br><br><br>
                <label>Novo Usuário?</label><br><br>
                <a class="form-link" role="button" href="/src/App/view/cad.php">Cadastro</a>
            </fieldset>
        </form>
    </div>
</body>
</html>