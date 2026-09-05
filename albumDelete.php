<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $cod_album = filter_input(INPUT_GET, "var_cod_album");
    $dados= "DELETE FROM album WHERE cod_album = {$cod_album}";

    mysqli_query($conexao, $dados) or die(mysqli_error());

    echo "Excluído com Sucesso!";

    mysqli_close($conexao);
?>
