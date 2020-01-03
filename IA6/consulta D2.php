<?php
include_once "conexao.php";
$formulario = $_REQUEST;
echo "VALORES-NEURONIOS SELECIONADOS PELO USUÁRIO:<br>";
print_r($formulario);
echo "<br>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = explode('-', $r_formulario);
	echo "<br><br>";
	echo "VALOR-NEURONIO: ";
	print_r($q_formulario);
	$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `val1` LIKE  '$q_formulario[0]'";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_row() ) { 

print_r($array_resultados2);
echo "<br>";
}
}
?>