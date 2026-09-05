<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $cod_artista = filter_input(INPUT_GET, "var_cod_artista");
    $dados= "DELETE FROM artista WHERE cod_artista = {$cod_artista}";

    mysqli_query($conexao, $dados) or die(mysqli_error());

    echo "Excluído com Sucesso!";

    mysqli_close($conexao);
?>
