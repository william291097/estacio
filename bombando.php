<?php
    if (isset($_GET['nome'])) {
        if ($_GET['opcao'] == "nao"){

            $texto = "Cliente ".$_GET['nome']." reservou ".$_GET['quantidade']." cartoes e nao estao pagos ainda;";
            
           $arquivo = fopen('msg.txt', 'a');
           fwrite($arquivo, $texto);
           fclose($arquivo);

        }

        else{
            
            $texto = "Cliente ".$_GET['nome']." reservou ".$_GET['quantidade']." cartoes e já estao pagos;";
            
           $arquivo = fopen('msg.txt', 'a');
           fwrite($arquivo, $texto);
           fclose($arquivo);

        }

    }


?>
    

<html>
<p><b>GREMIO ESPORTIVO PRIMAVERA</b></p><br><br>

<p><b>Sua reserva esta confirmada!</b></p><br><br>

<a href='fomulario.php'><button>Fazer mais uma reseva</button></a></br></br></br>
<a href='index.php'><button>Voltar a pagina principal</button></a>
</html>