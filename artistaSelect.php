<!doctype html>
<html>
   <head>
      <link rel="stylesheet" href="style.css">
      <title>Trabalho Prático</title>
      <meta charset="utf-8"/>
   </head>

   <body>

      <h1 class="titulo">Lista de ARTISTAS</h1>

      <table class="table">
         <tr class="cabecalho">
            <td><b>Código do Artista</b></td>
            <td><b>Nome do Artista</b></td>
            <td><b>Nacionalidade</b></td>
            <td><b>Gênero Musical</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td>
         </tr>

         <?php
            // criar conexao
            include_once("_conexao.php");
            $conexao = conectaBD();

            $sql = "SELECT * FROM artista;";
            $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
         ?>
         <tr>
            <td><?php echo $i['cod_artista'];?></td>
            <td><?php echo $i['nome'];?></td>
            <td><?php echo $i['nacionalidade'];?></td>
            <td><?php echo $i['genero'];?></td>

            <td><a class="alterar" href="<?php echo "artistaEditar.php?var_cod_artista=". $i['cod_artista']."&var_nome=".$i['nome']."&var_nacionalidade=".$i['nacionalidade']."&var_genero=".$i['genero']?>">Alterar</a></td>

            <td><a class="excluir" href="<?php echo "artistaDelete.php?var_cod_artista=". $i['cod_artista']?>">Excluir</a></td>

         </tr>
         <?php
            }
         ?>
      </table>
      <p class="cadastrar"><a href="artista.html">Cadastrar novo ARTISTA</a></p>

      <?php
         mysqli_close($conexao);
      ?>
   </body>
</html>