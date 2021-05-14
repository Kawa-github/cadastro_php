<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
<tr>
    <?php
    // Seleciona todos os usuários
    include "conexao.php";
    $cmd = $cn->query("SELECT * FROM post ORDER BY titulo_post");
    $resultado = $cmd->fetchAll(PDO::FETCH_CLASS);
    // Exibe as informações de cada usuário
    foreach ($resultado as $img) {
	// Exibimos a foto
	
    
    echo "<img src='imagens_post/".$img->img_post."' alt='Foto do Post' /><br />";
	// Exibimos o nome e email
	echo "<b>Título:</b> " . $img->titulo_post. "<br />";
	echo "<b>Descrição:</b> " . $img->descricao_post . "<br /><br />";
    echo "<b>Post ativo:</b> " . $img->post_ativo . "<br /><br />";
}?>
</body>
</html>