<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <BODY>
        Lista de ARTISTAS
        </br></br>

        <div class="table">
            <table border = "1">
                <tr>
                    <td><b>Código da Música</b></td>
                    <td><b>Código do Álbum</b></td>
                    <td><b>Título da Música</b></td>
                    <td><b>Duração</b></td>
                    <td><b>Alterar</b></td>
                    <td><b>Excluir</b></td>
                </tr>

                <?php
                    // criar conexao
                    include_once("_conexao.php");
                    $conexao = conectaBD();

                    $sql = "SELECT * FROM musica;";
                    $resultado = mysqli_query($conexao, $sql);

                    while($i = mysqli_fetch_assoc($resultado)){
                ?>
                    <tr>
                        <td><?php echo $i['cod_musica'];?></td>
                        <td><?php echo $i['cod_album'];?></td>
                        <td><?php echo $i['titulo'];?></td>
                        <td><?php echo $i['duracao'];?></td>

                        <td><a href="<?php echo "musicaEditar.php?var_cod_musica=". $i['cod_musica']."&var_cod_album=".$i['cod_album']."&var_titulo=".$i['titulo']."&var_duracao=".$i['duracao']?>">Alterar</a></td>
                        <td><a href="<?php echo "musicaDelete.php?var_cod_musica=". $i['cod_musica']?>">Excluir</a></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        <h4><a href="musica.html">Cadastrar nova MÚSICA</a></h4>

        <?php
            mysqli_close($conexao);
        ?>
    </BODY>
</HTML>