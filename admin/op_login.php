<?php
    include("conexao.php");//teste passou (var_dump($db););
    $txt_login = $_POST['txt_login'];
    $txt_senha = $_POST['txt_senha'];

    //echo "Usuário: ".$txt_login." -> Senha: ".$txt_senha;  //teste passou!
    $sql = "select * from administrador where login = '$txt_login' and senha = '$txt_senha'";
    $resultado = $cn->query($sql);
    //var_dump($resultado);
    $resultado = $resultado->fetch(PDO::FETCH_ASSOC);
    //var_dump($resultado);
    
    if(isset($resultado["id"])){
        $nome = $resultado["nome"];
        print "<script type='text/javascript'>location.href='principal.php?link=1&nome'</script>";
    }
    else{
        //print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'> 
        //<script type='text/javascript'>window.alert('Login ou senha não encontrado, tente novamente.')</script> ";   
    }



?>