<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $cod_musica        = $_POST["cod_musica"];
    $cod_album         = $_POST["cod_album"];
    $titulo            = $_POST["titulo"];
    $duracao           = $_POST["duracao"];
      
    $sql= "INSERT INTO musica(cod_musica, cod_album, titulo, duracao) 
           VALUES ({$cod_musica}, {$cod_album}, '{$titulo}', '{$duracao}')";
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

    mysqli_close($conexao);
?>
