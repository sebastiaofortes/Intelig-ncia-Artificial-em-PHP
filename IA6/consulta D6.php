<?php
include_once "conexao.php";
include_once "sinapses.php";
$super_array = array();
$super_array11 = array();
$super_array12 = array();
$super_array13 = array();
$super_array14 = array();
$super_array15 = array();
$super_array2 = array();
$super_array21 = array();
$super_array22 = array();
$super_array23 = array();
$super_array24 = array();
$super_array25 = array();
$super_array3 = array();
$super_array4 = array();
$super_array5 = array();
$super_array6 = array();
$super_array7 = array();
$formulario = $_REQUEST;

function iniciar ($formulario, $conecta, $super_array5) {
	
	
if($formulario)
{


echo "VALORES-NEURONIOS SELECIONADOS PELO USUÁRIO:<br>";
print_r($formulario);
echo "<br>";



$primeiro = new igual();
$super_array = $primeiro->gerar($formulario, $conecta);

$super_array11 = $primeiro->gerar2($formulario, $conecta);

$super_array12 = $primeiro->gerar3($formulario, $conecta);

$super_array13 = $primeiro->gerar4($formulario, $conecta);

$super_array14 = $primeiro->gerar5($formulario, $conecta);

$super_array15 = $primeiro->gerar6($formulario, $conecta);

$segundo = new diferente();
$super_array2 = $segundo->gerar($formulario, $conecta);

$super_array21 = $segundo->gerar2($formulario, $conecta);

$super_array22 = $segundo->gerar3($formulario, $conecta);

$super_array23 = $segundo->gerar4($formulario, $conecta);

$super_array24 = $segundo->gerar5($formulario, $conecta);

$super_array25 = $segundo->gerar6($formulario, $conecta);

echo "<br>";

echo "<h1> Brainstorming igual IGUAl </h1>";
$contagem = count($super_array) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array[$i]['val2'];
	echo "<br>";
}
	
	
echo "<h1> Brainstorming Diferente IGUAL </h1>";
$contagem = count($super_array11) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array11[$i]['val2'];
	echo "<br>";
}	
	

echo "<h1> Brainstorming menor ou igual IGUAL </h1>";
$contagem = count($super_array12) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array12[$i]['val2'];
	echo "<br>";
}	


echo "<h1> Brainstorming maior ou igual IGUAL </h1>";
$contagem = count($super_array13) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array13[$i]['val2'];
	echo "<br>";
}	



echo "<h1> Brainstorming menor IGUAL </h1>";
$contagem = count($super_array14) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array14[$i]['val2'];
	echo "<br>";
}	

echo "<h1> Brainstorming maior IGUAL </h1>";
$contagem = count($super_array15) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array15[$i]['val2'];
	echo "<br>";
}	

	
	
echo "<br>";

echo "<h1> Brainstorming igual DIFERENTE </h1>";
$contagem = count($super_array2) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array2[$i]['val2'];
	echo "<br>";
}

echo "<h1> Brainstorming diferente DIFERENTE </h1>";
$contagem = count($super_array21) - 1;
for ($i = 0; $i <= $contagem; $i++) {
    echo $super_array21[$i]['val2'];
	echo "<br>";
}



$super_array3 = calcular($super_array, $super_array2);
	
echo "<br>";
echo '<h1 style="color:white;background-color:green"> Resultado final </h1>';
$contagem = count($super_array3) - 1;
for ($i3 = 0; $i3 <= $contagem; $i3++) {
    echo $super_array3[$i3]['val2'];
	echo $super_array3[$i3]['peso'];
	$super_array5[] = $super_array3[$i3];
	echo "<br>";
}


$super_array4 = transformar_array($super_array3);

iniciar($super_array4, $conecta,$super_array5);

}
else {
	echo '<h4 style="color:white;background-color:red">Fim da árvore de decisão</h4>';

	echo '<h4 style="color:white;background-color:green">resultados do objetivo da consulta</h4>';
	$objetivo = $_COOKIE['objetivo'];
	$contagem = count($super_array5) - 1;
for ($i3 = 0; $i3 <= $contagem; $i3++) {
	if($super_array5[$i3]['var2'] == $objetivo)
	{
    echo $super_array5[$i3]['var2'];
	echo " = ";
	echo $super_array5[$i3]['val2'];
	echo " com peso: ";
	echo $super_array5[$i3]['peso'];
	echo "<br>";
	}
	}
	echo '<h4 style="color:white;background-color:green">resultados adicionais</h4>';
	$objetivo = $_COOKIE['objetivo'];
	$contagem = count($super_array5) - 1;
for ($i3 = 0; $i3 <= $contagem; $i3++) {
	if($super_array5[$i3]['var2'] != $objetivo)
	{
    echo $super_array5[$i3]['var2'];
	echo " = ";
	echo $super_array5[$i3]['val2'];
	echo " com peso: ";
	echo $super_array5[$i3]['peso'];
	echo "<br>";
	}
	}
echo '<p style="color:white;background-color:00008b;">Veja abaixo todos os resultados obtidos:<p><br>';
$contagem = count($super_array5) - 1;
for ($i3 = 0; $i3 <= $contagem; $i3++) {
    echo $super_array5[$i3]['var2'];
	echo " = ";
	echo $super_array5[$i3]['val2'];
	echo " com peso: ";
	echo $super_array5[$i3]['peso'];
	echo "<br>";
}
}
}


iniciar($formulario, $conecta, $super_array5);

?>