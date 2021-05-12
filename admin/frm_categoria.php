<?php
//include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Dinâmico</title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <div id="box-cadastro">
        <div id="formulario-menor">
            <form id="frmcategoria" name="frmcategoria" action="op_categoria.php" method="post">
                <fieldset>
                    <legend>Cadastro categoria</legend>
                    <label for="">
                        <span>Categoria</span>
                        <input type="text" name="txt_categoria" id="txt_categoria" value="">
                    </label>
                    
                    <label for="">
                        <span>Ativo</span>
                        <input type="text" name="txt_ativo" id="txt_ativo" value="">
                    </label>
                    <br>
                    <input type="submit" value="Cadastrar" name="btn-cadastrar">    
                </fieldset>
            </form>
        </div>
    </div>    
</body>
</html>