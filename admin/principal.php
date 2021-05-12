<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área Administrativa -
    <?php
    $nome = $_GET['nome']; echo $nome;
    ?>
    </title>

    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <div id="principal">
        <div id="cabecalho">
            <div id="titulo_top">
                <img src="img/logoAreaAdministrativa.png" alt="">
            </div>
        </div>
        <div id="corpo">
            <div id="esquerdo">
                <div id="sessao">Categoria
                    <ul>
                        <li><a href="principal.php?link=2">Cadastrar</a></li>
                        <li><a href="principal.php?link=3">Listar/editar</a></li>
                    </ul>
                </div>
                <div id="sessao">Notícias
                    <ul>
                        <li><a href="principal.php?link=4">Cadastrar</a></li>
                        <li><a href="principal.php?link=5">Listar/editar</a></li>
                    </ul>
                </div>
                <div id="sessao">Post
                    <ul>
                        <li><a href="principal.php?link=6">Cadastrar</a></li>
                        <li><a href="principal.php?link=7">Listar/editar</a></li>
                    </ul>
                </div>
            </div>
            <div id="direito">
                <?php
                    $link = $_GET['link'];

                    $pag[1]="home.php";
                    $pag[2]="frm_categoria.php";
                    $pag[3]="lista_categoria.php";
                    $pag[4]="frm_post.php";
                    $pag[5]="lista_post.php";
                    $pag[6]="frm_post.php";
                    $pag[7]="lista_noticia.php";
                    
                    if(!empty($link)){
                        if(file_exists($pag[$link])){
                            include $pag[$link];
                        }
                        else{
                            include "home.php";
                        }
                    }
                    else{
                        include "home.php";
                    }

                ?>
            </div>
        </div>
    </div>

    
</body>
</html>