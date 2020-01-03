<?php
include_once "conexao.php";
$super_array = array();
$super_array2 = array();
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
while($array_resultados2 = $result2->fetch_assoc() ) { 

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
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
$super_array2[] = $array_resultados2;

}
}
echo "<br>";
echo "<h1> Brainstorming ENTAO array </h1>";
print_r($super_array);
echo "<h1> Brainstorming ENTAO </h1>";
$contagem = count($super_array) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array[$i]['val2'];
	echo "<br>";
}
	
	
echo "<br>";
echo "<h1> Brainstorming NAO array </h1>";
print_r($super_array2);
echo "<h1> Brainstorming NAO </h1>";
$contagem = count($super_array2) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array2[$i]['val2'];
	echo "<br>";
}

echo "<br>";
echo "<h1> Resultado final </h1>";
$contagem2 = count($super_array) - 1;
$contagem3 = count($super_array2) - 1;
for ($i = 0; $i <= $contagem2; $i++) {
    echo $super_array[$i]['val2'];
	for ($i2 = 0; $i2 <= $contagem3; $i2++) {
		 echo $super_array2[$i2]['val2'];
		 if($super_array[$i]['val2'] == $super_array2[$i2]['val2'])
		 {
			 echo "certo";
		 }
	}
	echo "<br>";
}

?>