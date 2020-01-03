<?php
include_once "conexao.php";
$super_array = array();
$formulario = $_REQUEST;
echo "VALORES-NEURONIOS SELECIONADOS PELO USUÁRIO:<br>";
print_r($formulario);
echo "<br>";
echo "<h1> Sinapses entao </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = explode('-', $r_formulario);
	echo "<br><br>";
	echo "VALOR-NEURONIO: ";
	print_r($q_formulario);
	$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `condicao` LIKE  'entao'
AND  `val1` LIKE  '$q_formulario[0]'";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_row() ) { 

print_r($array_resultados2);
echo "<br>";
$super_array[] = $array_resultados2;
}
}
echo "<br>";

echo "<h1> Sinapses nao </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = explode('-', $r_formulario);
	echo "<br><br>";
	echo "VALOR-NEURONIO: ";
	print_r($q_formulario);
	$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `condicao` LIKE  'nao'
AND  `val1` LIKE  '$q_formulario[0]'";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_row() ) { 

print_r($array_resultados2);
echo "<br>";

}
}
echo "<br>";
echo "<h1> Brainstorming </h1>";
print_r($super_array);
?>