<html>
	<p><b>GREMIO ESPORTIVO PRIMAVERA</b></p><br>
	<p>Segue a lista de reservas ja feitas para o evento</p></br></br>

<?php

$file = 'msg.txt';
// Abre o arquivo para obter o conteúdo existente
$current = file_get_contents($file);
// Acrescenta a nova pessoa no arquivo

//var_dump( explode( ';', $current) );

$cortado = explode( ';', $current) ;

$quantos = count($cortado);

$qnt = $quantos -1;

//echo $qnt;

$cont = 0;

While($cont < $qnt){
	echo $cortado[$cont];
	?>
	<html></br></br></html>
	<?php
	$cont = $cont +1;
}