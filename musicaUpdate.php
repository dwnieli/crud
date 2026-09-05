<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

   $var_cod_musica     = $_POST["input_cod_musica"];
   $var_cod_album      = $_POST["input_cod_album"];
   $var_titulo         = $_POST["input_titulo"];
   $var_duracao        = $_POST["input_duracao"];

   $SQL = "UPDATE musica
              SET    cod_album   = '$var_cod_album',
                     titulo      = '$var_titulo',
                     duracao     = '$var_duracao'
              WHERE  cod_musica  = {$var_cod_musica}";

   mysqli_query($conexao, $SQL) or die(mysqli_error());

   echo "Atualizado com Sucesso!";

// encerrar conexão
   mysqli_close($conexao);
?>


 
