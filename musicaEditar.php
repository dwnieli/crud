<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_cod_musica");
      $get2 = filter_input(INPUT_GET, "var_cod_album");
      $get3 = filter_input(INPUT_GET, "var_titulo");
      $get4 = filter_input(INPUT_GET, "var_duracao");
   ?>

    Tela de Edição de MÚSICA
    </br></br>

    <form action="musicaUpdate.php" method="post">

        <input type=hidden name=tabela value="musica">

        Código da Música:
        <input type="text" name="input_cod_musica" value="<?php echo $get1?>" readonly>
        </br></br>

        Nome do Álbum:
        <input type="text" name="input_cod_album" value="<?php echo $get2?>">
        </br></br>

        Título da Música:
        <input type="text" name="input_titulo" value="<?php echo $get3?>">
        </br></br>

        Duração:
        <input type="text" name="input_duracao" value="<?php echo $get4?>">
        </br></br>

        <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
