<?php
include "conexao.php";
$txt_titulo = $_POST["txt_titulo"];
$txt_descricao = $_POST["txt_descricao"];
//$imagem_post = $_FILES["imagem_post"];


if(isset($_FILES["imagem_post"])){
    $cmd = $cn->prepare('INSERT INTO post(titulo_post, img_post, descricao_post) VALUES(:txt_titulo,:imagem_post,:txt_descricao)');
    $cmd->execute(array(
    ':txt_titulo' => $txt_titulo,
     ':txt_descricao'=>$txt_titulo, 
     ':imagem_post'=>$imagem_post,   
    ));    
    echo $cmd->rowCount();
 }
 else{
    echo "Erro ao cadastrar";
   // print "<script type='text/javascript'>location.href='principal.php?link=2'</script>";
 }

?>