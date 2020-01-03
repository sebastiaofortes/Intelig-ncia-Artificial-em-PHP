<?php
function percorrer ($nivel1) {

	
	$nivel2 = new novo_nivel($nivel1, $nivel1->conecta);
	if($nivel2->variaveis_array)
	{
	echo "<br><br> $nivel2->contagem VARIÁVEIS (NEURÔNIOS) ENVOLVIDOS NO $nivel2->contador º NÍVEL:<br> ";
	print_r( $nivel2->variaveis_array ); // ARRAY UNIDIMENSIONAL
	eCho "<br>VALORES DOS NEURÔNIOS DO $nivel2->contador º NIVEL:<br> ";
	$exibir1 = new exibir($nivel2);
	percorrer($nivel2);
	}
	else
	{
	echo "<br>Sem mais níveis existentes<br>";
	}
}
?>