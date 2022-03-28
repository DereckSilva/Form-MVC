<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="/public/css/estilo.css">
    <link href="https://cdn-icons.flaticon.com/png/512/3804/premium/3804279.png?token=exp=1648243927~hmac=0a8820b20cdd2f6c337711233bfd95cb" rel="icon"/>
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <form action="/src/App/controller/CadastroController.php" method="POST" class="form-geral">
            <fieldset>
                <h1>Cadastro Dev</h1>
                <i class="fa fa-user" aria-hidden="true"></i><br>
                <input type="text" name="nomeUser" id="nomeUser" required class="form-input" placeholder="Ex: Dereck"><br>
                <i class="fa fa-user" aria-hidden="true"></i><br>
                <input type="text" name="sobrenomeUser" id="sobrenomeUser" required class="form-input" placeholder="Ex: Silva"><br>
                <i class="fa fa-unlock" aria-hidden="true"></i> </i><br>
                <input type="password" name="senhaUser" id="senhaUser" required placeholder="*******" class="form-input"><br>
                <button type="submit" name="enviar" class="form-button">Cadastrar</button><br><br><br><br>
                <label>Possui cadastro?</label><br><br>
                <a class="form-link" role="button" href="/src/App/view/login.php"><span>Login</span></a>
            </fieldset>
        </form>
    </div>
</body>
</html>