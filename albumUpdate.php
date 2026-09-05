<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $var_cod_album      = $_POST["input_cod_album"];
    $var_cod_artista    = $_POST["input_cod_artista"];
    $var_titulo         = $_POST["input_titulo"];
    $var_ano_lancamento = $_POST["input_ano_lancamento"];
   

   $SQL = "UPDATE album
              SET    cod_artista        = '$var_cod_artista',
                     titulo             = '$var_titulo',
                     ano_lancamento     = '$var_ano_lancamento'
              WHERE  cod_album          = {$var_cod_album}";

   mysqli_query($conexao, $SQL) or die(mysqli_error());

   echo "Atualizado com Sucesso!";

// encerrar conexão
   mysqli_close($conexao);
?>


 
