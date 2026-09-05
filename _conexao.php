<?php
function conectaBD(){
    $servername = "localhost";
    $database = "bd_musicas";
    $username = "root";
    $password = "";

    $conexao = mysqli_connect($servername, $username, $password, $database);

    if (!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    return $conexao;
}

function desconectaBD($conexao){
    mysqli_close($conexao);
}
?>
