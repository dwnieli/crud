<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $cod_artista        = $_POST["cod_artista"];
    $nome               = $_POST["nome"];
    $nacionalidade      = $_POST["nacionalidade"];
    $genero             = $_POST["genero"];
      
    $sql= "INSERT INTO artista(cod_artista, nome, nacionalidade, genero) 
           VALUES ({$cod_artista},'{$nome}','{$nacionalidade}','{$genero}')";
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

    mysqli_close($conexao);
?>
