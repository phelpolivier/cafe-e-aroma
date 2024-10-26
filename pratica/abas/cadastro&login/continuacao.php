<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../image/miniatura.png" type="image/x-icon">
    <title>Cadastro - CAFÉ & AROMA</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/cadastro.css">
</head>
<body>
    <?php
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
    ?>
    <div class="formulario">
            <img src="../../image/logo-2.png" width="180px" height="68px">
            <?php 
                echo "<h3>Olá, $nome.</h3>";
            ?>
            <!--<h3>Cadastro</h3>-->
            <form action="processa_cadastro.php" method="post">
                <label for="mail">E-mail: </label>
                <input type="email" name="mail" placeholder="Digite seu e-mail" class="input">
                <br>
                <label for="lastname">Senha: </label>
                <input type="password" name="senha" placeholder="Cria uma senha" class="input">
                <br><br>
                <div class="entrar">
                    <div class="login-social">
                        <button id="google" class="botao-login">Google</button><br>
                        <button id="Facebook" class="botao-login">Instagram</button>
                    </div>
                    <input type="submit" value="Finalizar">
                    <img src="../file.png" alt="" id="ou">
                </div><!--Fim div class entrar-->
            </form>
        </div>
    </div>
    </body>
    </html>
</body>
</html>