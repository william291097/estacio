<?php
	session_start();
?>

<html>
	<p><b>GREMIO ESPORTIVO PRIMAVERA</b></p><br>
	<p>Para quantas pessoas vc pretende confirmar o almoço?</p>


<form action="bombando.php">
		
	
		<select id="quantidade" name="quantidade">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">19</option>
			<option value="19">19</option>
			<option value="20">20</option>
		</select>
		<p>No nome de quem será feita a reserva?</p>
		<input type="text" name="nome"><br>
	<p>Pretende pagar o ingresso agora? Caso não queira pode pagar no local da festa! Se pagar agora, chave pix é CNPJ: 89909600000180, levar o comprovante de pagamento no dia da festa</p>
	
	  <input type="radio" name="opcao" value="sim">SIM<br>
		<input type="radio" name="opcao" value="nao">NÃO<br><br>
	  <input type="submit" value="Submit">
	</form>

</html>