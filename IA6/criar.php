<?php
class criar {
public $variaveis_array = array();	/* ARRAY QUE VAI CONTER OS VALORES DAS VARIAVEIS */
public $conecta;
public $contador = 1;
function criar ($conecta, $objetivo) {
$this->conecta = $conecta;
$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var2` LIKE  '$objetivo'
";

$result1 = $conecta -> query($sql2);  



while($array_resultados = $result1->fetch_row()){		/* PEGA O VALOR DA CONSULTA E SALVA DENTRO DE UM ARRAY */
if(in_array("$array_resultados[1]", $this->variaveis_array)) 		/* PROCURA NO ARRAY DE VARIAVEIS O NOME DAS VARIAVEIS OBTIDAS NA CONSULTA*/
{
	/* CASO ENCONTRE NÃO FAZ NADA */

}
else								/* CASO NÃO ENCONTRE ADICIONA O NOME AO ARRAY DE VARIAVEIS */
{
	$this->variaveis_array[] = $array_resultados[1];	
}
}
}
}
?>