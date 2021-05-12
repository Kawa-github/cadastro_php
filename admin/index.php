<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Dinamico | <?php echo "Olá administrador..." ?></title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <div id = "box-login">
        <div id="formulario-login">
            <form id="frmlogin" name="frmlogin" action="op_login.php" method="post">
                <fieldset>
                    <legend>Faça Login</legend>
                    <label for="txt_login"><span>Login</span></label>
                    <input type="text" name="txt_login" id="txt_login" required>

                    <label for="txt_senha"><span>Senha</span></label>
                    <input type="password" name="txt_senha" id="txt_senha" required>
                    <br>
                    <input type="submit" name="login" id="login" value="Logar" class="botao">
                </fieldset>
            </form>

        </div>
    </div>
    
</body>
</html>