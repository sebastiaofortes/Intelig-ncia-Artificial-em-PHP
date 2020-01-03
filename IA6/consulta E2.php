<meta charset="UTF-8">
<?php
$formulario = $_REQUEST;
$consulta = "epi"; /* VARIAVEL OBJETIVO DA CONSULTA */
include_once "conexao.php";


$objetivo = array_shift($formulario);
echo "Objetivo da consulta: <b> $objetivo </b> <br><br>";

include_once "busca.php";
include_once "subir_nivel.php";
include_once "exibir.php";

$nivel1 = new busca($conecta, $objetivo);

$contagem = count($nivel1->variaveis_array);
echo "$contagem VARIÁVEIS (NEURÔNIOS) ENVOLVIDOS NO PRIMEIRO NÍVEL:<br> ";
print_r( $nivel1->variaveis_array);
echo "<br>";

echo '<form name="ia">';
eCho "<br>VALORES DOS NEURÔNIOS DO PRIMEIRO NIVEL:<br> ";


$exibir1 = new exibir($nivel1, $conecta);

$nivel2 = new novo_nivel($nivel1, $conecta);

 
echo "<br><br> $nivel2->contagem VARIÁVEIS (NEURÔNIOS) ENVOLVIDOS NO SEGUNDO NÍVEL:<br> ";

print_r( $nivel2->variaveis_array ); // ARRAY UNIDIMENSIONAL

eCho "<br>VALORES DOS NEURÔNIOS DO SEGUNDO NIVEL:<br> ";

$exibir1 = new exibir($nivel2, $conecta);

$nivel3 = new novo_nivel($nivel2, $conecta);

eCho "<br>VALORES DOS NEURÔNIOS DO TERCEIRO NIVEL:<br> ";

print_r( $nivel3->variaveis_array ); // ARRAY UNIDIMENSIONAL

$exibir1 = new exibir($nivel3, $conecta);

echo '<button type="submit" formmethod="post" formaction="consulta D2.php">Consultar</button>';
echo '<button type="submit" formmethod="post" formaction="consulta D3.php">Consultar</button>';
echo '<button type="submit" formmethod="post" formaction="consulta D4.php">Consultar</button>';
echo '<button type="submit" formmethod="post" formaction="consulta D5.php">Consultar</button>';
echo '<button type="submit" formmethod="post" formaction="consulta D6.php">Consultar</button>';
?>