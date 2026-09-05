<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $cod_album          = $_POST["cod_album"];
    $cod_artista        = $_POST["cod_artista"];
    $titulo             = $_POST["titulo"];
    $ano_lancamento     = $_POST["ano_lancamento"];
      
    $sql= "INSERT INTO album(cod_album, cod_artista, titulo, ano_lancamento) 
           VALUES ({$cod_album},{$cod_artista},'{$titulo}','{$ano_lancamento}')";
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

    mysqli_close($conexao);
?>
