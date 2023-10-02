<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            <h2 class="title-login">login</h2>
            <form action="" class="inputs">
                    <input type="text" name="login" class="input-name">
                    <input type="password" name="senha" class="input-senha">
                    <input type="submit" name="acao" value="Entrar" class="btn-login">
                </form>
            </div>
            <div class="">
                <p class="mensagem-cadastro">Voce possui um conta?</p>
                <a href="" class="link-cadastro">Cadastre-se</a>
            </div>
        </div>
        <div class="container-img">
            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/fotoLogin.png" alt="" class="img-login">
        </div>
    </div>
</body>

</html>