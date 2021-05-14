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
            <form id="frm_post" name="frm_post" action="op_post.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Envio de imagens</legend>
                    <label for="">
                        <span>Titulo:</span>
                        <input type="text" name="txt_titulo" id="txt_titulo" value="">
                    </label>
                    
                    <label for="">
                        <span>Descrição:</span>
                        <input type="textarea" name="txt_descricao" id="txt_descricao" value="">
                    </label>
                    <br>
                    <label for="">
                        <span>Post Ativo</span>
                        <input type="text" name="txt_ativo" id="txt_ativo" value="">
                    </label>
                    <br>

                    <label for="imagem">Imagem:</label>
		        <input type="file" name="imagem_post"/>
		        <br/>
		        <input type="submit" value="enviar" name="enviar"/>
                </fieldset>
            </form>
        </div>
</body>
</html>