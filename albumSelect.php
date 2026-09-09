<!doctype html>
<html>
   <head>
      <link rel="stylesheet" href="style.css">
      <meta charset="utf-8"/>
      <title>Trabalho Prático</title>
   </head>

   <body>

      <h1 class="titulo">Lista de ÁLBUNS</h1>

      <table class="table">
         <tr class="cabecalho">
            <td><b>Código do Álbum</b></td>
            <td><b>Código Artista</b></td>
            <td><b>Título do Álbum</b></td>
            <td><b>Ano Lançamento</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td>
         </tr>

         <?php
            // criar conexao
            include_once("_conexao.php");
            $conexao = conectaBD();

            $sql = "SELECT * FROM album;";
            $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
         ?>
         <tr>
            <td><?php echo $i['cod_album'];?></td>
            <td><?php echo $i['cod_artista'];?></td>
            <td><?php echo $i['titulo'];?></td>
            <td><?php echo $i['ano_lancamento'];?></td>

            <td><a class="alterar "href="<?php echo "albumEditar.php?var_cod_album=".$i['cod_album']."&var_cod_artista=".$i['cod_artista']."&var_titulo=".$i['titulo']."&var_ano_lancamento=".$i['ano_lancamento']; ?>">Alterar</a></td>

            <td><a class="excluir "href="<?php echo "albumDelete.php?var_cod_album=". $i['cod_album']?>">Excluir</a></td>

         </tr>
         <?php
            }
         ?>
      </table>
      <p class="cadastrar"><a href="album.html">Cadastrar novo ÁLBUM</a></p>

      <?php
         mysqli_close($conexao);
      ?>
   </body>
</html>