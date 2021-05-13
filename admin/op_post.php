<?php
//$txt_titulo = $_POST["txt_titulo"];
//$txt_descricao = $_POST["txt_descricao"];
//$imagem_post = $_FILES["imagem_post"];

//echo $_FILES['imagem_post'];
//if (isset($_POST['cadastrar'])) {}
/*if(isset($_FILES['enviar'])){
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
}*/
include "conexao.php";

if(isset($_FILES['enviar'])){
   // Recupera os dados dos campos
	$txt_titulo = $_POST['txt_titulo'];
	$txt_descricao = $_POST['txt_descricao'];
	$txt_ativo = $_POST['txt_ativo'];
   $imagem_post = $_FILES["imagem_post"];
	 //var_dump($imagem_post);
	// Se a foto estiver sido selecionada
	if (!empty($imagem_post["name"])) {
		
		// Largura máxima em pixels
		$largura = 200;
		// Altura máxima em pixels
		$altura = 180;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000;

		$error = array();

    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem_post["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($imagem_post["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem_post["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "imagens_post/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem_post["tmp_name"], $caminho_imagem);
         //https://rafaelcouto.com.br/salvar-imagem-no-banco-de-dados-com-php-mysql/
		
			// Insere os dados no banco
			$cmd = $cn->prepare('INSERT INTO post (titulo_post, descricao_post, post_ativo ,img_post) VALUES(:txt_titulo, :txt_descricao, :txt_ativo, :imagem_post)');
			$cmd->execute(array(':txt_titulo' => $txt_titulo, ':txt_descricao'=>$txt_descricao,':txt_ativo' => $txt_ativo, ':imagem_post'=>$nome_imagem));
			//$sql = "INSERT INTO categoria INSERT INTO post (titulo_post, descricao_post, post_ativo ,img_post) VALUES(:txt_titulo, :txt_descricao, :txt_ativo, :imagem_post)";
         //$resultado = $resultado->fetch(PDO::FETCH_ASSOC);
         
         // Se os dados forem inseridos com sucesso
			if ($cmd->rowCount()>0)
			echo "Post inserido com sucesso.";
		}
      else{
         echo "Erro ao inserir imagem";
      }
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
 
   }

?>