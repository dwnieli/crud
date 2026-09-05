<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $cod_musica = filter_input(INPUT_GET, "var_cod_musica");
    $dados= "DELETE FROM musica WHERE cod_musica = {$cod_musica}";

    mysqli_query($conexao, $dados) or die(mysqli_error());

    echo "Excluído com Sucesso!";

    mysqli_close($conexao);
?>
