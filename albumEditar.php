<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_cod_album");
      $get2 = filter_input(INPUT_GET, "var_cod_artista");
      $get3 = filter_input(INPUT_GET, "var_titulo");
      $get4 = filter_input(INPUT_GET, "var_ano_lancamento");
   ?>

    Tela de Edição de ÁLBUM
    </br></br>

    <form action="albumUpdate.php" method="post">

        <input type=hidden name=tabela value="album">

        Código do Álbum:
        <input type="text" name="input_cod_album" value="<?php echo $get1?>" readonly>
        </br></br>

        Código do Artista:
        <input type="text" name="input_cod_artista" value="<?php echo $get2?>">
        </br></br>

        Título do Álbum:
        <input type="text" name="input_titulo" value="<?php echo $get3?>">
        </br></br>

        Ano de Lançamento:
        <input type="text" name="input_ano_lancamento" value="<?php echo $get4?>">
        </br></br>

        <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
