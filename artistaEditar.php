<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_cod_artista");
      $get2 = filter_input(INPUT_GET, "var_nome");
      $get3 = filter_input(INPUT_GET, "var_nacionalidade");
      $get4 = filter_input(INPUT_GET, "var_genero");
   ?>

    Tela de Edição de ARTISTA
    </br></br>

    <form action="artistaUpdate.php" method="post">

        <input type=hidden name=tabela value="artista">

        Código do Artista:
        <input type="text" name="input_cod_artista" value="<?php echo $get1?>" readonly>
        
        </br></br>

        Nome do Artista:
        <input type="text" name="input_nome" value="<?php echo $get2?>">

        </br></br>

        Nacionalidade:
        <input type="text" name="input_nacionalidade" value="<?php echo $get3?>">

        </br></br>

        Gênero Musical:
        <input type="text" name="input_genero" value="<?php echo $get4?>">

        </br></br>

        <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
