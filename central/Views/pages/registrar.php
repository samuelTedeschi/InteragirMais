<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>styles/styles.css">
</head>

<body>
    <div class="container">
        <div class="container-login">
            <h1 class="title">InteragirMais</h1>
            <div class="container-form">
            <h2 class="title-login">Criar Conta</h2>
            <form method="post" class="inputs">
                    <input type="text" name="nome" class="input-name" placeholder="Seu nome">
                    <input type="text" name="login" class="input-name" placeholder="Nome de usuario">
                    <input type="password" name="senha" class="input-senha" placeholder="Senha">
                    <input type="submit" name="acao" value="Criar conta" class="btn-login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>