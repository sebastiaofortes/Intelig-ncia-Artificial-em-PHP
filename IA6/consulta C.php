<meta charset="UTF-8">
<?php
$consulta = "epi"; /* VARIAVEL OBJETIVO DA CONSULTA */
include_once "conexao.php";

echo '<form name="ia">';

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var2` LIKE  '$consulta'
";

$result1 = $conecta -> query($sql2);  

$variaveis_array = array( 'chave'  => 'valor');	/* ARRAY QUE VAI CONTER OS VALORES DAS VARIAVEIS */

while($array_resultados = $result1->fetch_row()){		/* PEGA O VALOR DA CONSULTA E SALVA DENTRO DE UM ARRAY */
if(in_array("$array_resultados[1]", $variaveis_array)) 		/* PROCURA NO ARRAY DE VARIAVEIS O NOME DAS VARIAVEIS OBTIDAS NA CONSULTA*/
{
echo "achei $array_resultados[1] ";			/* CASO ENCONTRE NÃO FAZ NADA */
print_r( $variaveis_array );
echo "<br>";
}
else								/* CASO NÃO ENCONTRE ADICIONA O NOME AO ARRAY DE VARIAVEIS */
{
	echo "não achei $array_resultados[1] ";
	print_r( $variaveis_array );
	echo "<br>";
	$variaveis_array[] = $array_resultados[1];	
}
}
eCho "RESULTADO FINAL: ";
print_r( $variaveis_array );

foreach ($variaveis_array as $resultado_array)	/* PERCORRE A VARIAVEL DE ARRAYS */
{
$sql3 = "SELECT * 
FROM  `variaveis` 
WHERE  `nome` LIKE  '$resultado_array'
";
$result2 = $conecta -> query($sql3); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */

while($array_resultados2 = $result2->fetch_row() ) { 

$final = explode(',', $array_resultados2[1]);	/* SEPARA OS VALORES PELAS VÍRGULAS E OS SALVA NUM ARRAY */
foreach ($final as $final) {
  echo '<input type="checkbox" name="'.$final.'" value="'.$final.'"> '.$final.' <br>';	/* EXIBE OS VALORES DO ARRAY EM CHECKBOX */
}
}
}


?>