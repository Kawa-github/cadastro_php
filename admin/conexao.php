<?php
// conexão banco de dados mysql (Simples)
   // $host = "localhost";
    //$usuario = "root";
  //  $senha = "usbw";
//    $banco = "dinamicodb";

    //$db = mysqli_connect($host, $usuario,$senha, $banco);
    //var_dump($db);

    $cn = new PDO("mysql:host=localhost;dbname=dinamicodb","root","usbw");
    var_dump($cn);
    

?>