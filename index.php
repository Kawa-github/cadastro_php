<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site dinamico UC12</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="banner">

    <nav>

    </nav>
    </header>
    <main id="corpo">
        <section id="esquerda" class="esquerda">
            <h1>Produtos</h1>
            <li><a href="index.php?link=5">Produto 1</a></li>
            <li><a href="index.php?link=">Produto 2</a></li>
            <li><a href="index.php?link=">Produto 3</a></li>
            <li><a href="index.php?link=">Produto 4</a></li>
        </section>
        <section id="centro">
            <?php
                $link = $_GET['link'];

                $pag[1]="home.php";
                $pag[5]="produto1.php";
                
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
        </section>
        <section id="direita">
                <div id="noticias">
                    <h3>imagem noticia</h3>
                    <div id="itens-noticias">
                        <span>12/09/2019</span></br>
                        <a href="index.php?link=">Lançamento do curso de PHP</a>
                    </div>

                    <div id="itens-noticias">
                        <span>10/09/2019</span></br>
                        <a href="index.php?link=">Criação do Modelo de curso de PHP</a>
                    </div>

                    <div id="itens-noticias">
                        <span>02/09/2019</span></br>
                        <a href="index.php?link=">Festival de PHP</a>
                    </div>

                </div>
        </section>
        <section id="admin" >
            Área Administrativa
            <br>
            <a href="admin/index.php">acesso área administrativa</a>
        </section>
        <section id ="rodape">
                &copy; - Todos os direitos reservados.
        </section>
    </main>
    
</body>
</html>