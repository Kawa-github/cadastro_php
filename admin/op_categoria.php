<?php
 include "conexao.php";
 //$txt_categoria = $_POST['txt_categoria'];
 //$txt_ativo = $_POST['txt_ativo'];


 

 //$sql = "INSERT INTO categoria (categoria, cat_ativo) VALUES ('null','$txt_categoria','$txt_ativo')";
 //$resultado = $cn->query($sql);
 //$resultado = $resultado->fetch(PDO::FETCH_ASSOC);
 $txt_categoria = $_POST["txt_categoria"];
 $txt_ativo = $_POST["txt_ativo"];

 if(isset($_POST["txt_categoria"])){
    $cmd = $cn->prepare('INSERT INTO categoria(categoria, cat_ativo) VALUES(:txt_categoria,:txt_ativo)');
    $cmd->execute(array(
    ':txt_categoria' => $txt_categoria, ':txt_ativo'=>$txt_ativo    
    ));    
    echo $cmd->rowCount();
 }
 else{
    echo "Categoria cadastrada com sucesso!";
   // print "<script type='text/javascript'>location.href='principal.php?link=2'</script>";
 }

?>



<!--?php
    include('conexao.php');
    if(isset($_POST['btn-cadastrar'])){
        $txt_categoria = $_POST['txt_categoria'];
        $txt_ativo = $_POST['txt_ativo'];
        if($txt_categoria == '' || $txt_ativo == ''){
            echo 'Preencha os campos.';
        }else{
            //$sql = $pdo->prepare("INSERT INTO categoria VALUES (categoria, cat_ativo)");
            $sql->execute([$txt_categoria, $txt_ativo]);
            echo 'Categoria cadastrada com sucesso';
        }
    }   
?-->