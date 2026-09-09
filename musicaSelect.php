<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <title>Trabalho Prático</title>
   </head>

   <body>

      <h1 class="titulo">Lista de MÚSICAS</h1>

      <table class="table">
         <tr class="cabecalho">
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

            <td><a class="alterar" href="<?php echo "musicaEditar.php?var_cod_musica=". $i['cod_musica']."&var_cod_album=".$i['cod_album']."&var_titulo=".$i['titulo']."&var_duracao=".$i['duracao']?>">Alterar</a></td>
            <td><a class="excluir" href="<?php echo "musicaDelete.php?var_cod_musica=". $i['cod_musica']?>">Excluir</a></td>
         </tr>
         <?php
            }
         ?>
      </table>
      <p class="cadastrar"><a href="musica.html">Cadastrar nova MÚSICA</a></p>

      <?php
         mysqli_close($conexao);
      ?>
   </body>
</html>