<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

   $var_cod_artista     = $_POST["input_cod_artista"];
   $var_nome            = $_POST["input_nome"];
   $var_nacionalidade   = $_POST["input_nacionalidade"];
   $var_genero          = $_POST["input_genero"];

   $SQL = "UPDATE artista
              SET    nome               = '$var_nome',
                     nacionalidade      = '$var_nacionalidade',
                     genero             = '$var_genero'
              WHERE  cod_artista        = {$var_cod_artista}";

   mysqli_query($conexao, $SQL) or die(mysqli_error());

   echo "Atualizado com Sucesso!";

// encerrar conexão
   mysqli_close($conexao);
?>


 
