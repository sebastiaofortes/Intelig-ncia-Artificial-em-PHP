<meta charset="UTF-8">
<?php

$formulario = $_REQUEST; // COLETA OS DADOS RECEBIDOS DA PAGINA ANTERIOR

include_once "conexao.php";
include_once "criar.php";
include_once "novo_nivel.php";
include_once "exibir.php";
include_once "arvore.php";

$objetivo = array_shift($formulario); // VARIAVEL QUE CONTÉM O OBJETIVO DA CONSULTA
setcookie('objetivo', $objetivo);

echo "Objetivo da consulta: <b> $objetivo </b> <br><br>";

$nivel1 = new criar($conecta, $objetivo); // CRIA O PRIMEIRO NÍVEL DA ÁRVORE DE DECISÃO

$contagem = count($nivel1->variaveis_array);
echo "$contagem VARIÁVEIS (NEURÔNIOS) ENVOLVIDOS NO PRIMEIRO NÍVEL:<br> ";
print_r( $nivel1->variaveis_array);
echo "<br>";

echo '<form name="ia">';
eCho "<br>VALORES DOS NEURÔNIOS DO PRIMEIRO NIVEL:<br> ";


$exibir1 = new exibir($nivel1); // RENDERIZA OS CHECK-BOX DO PRIMEIRO NÍVEL


percorrer ($nivel1);


echo '<button type="submit" formmethod="post" formaction="consulta D2.php">Consultar</button>';
echo '<button type="submit" formmethod="post" formaction="consulta D3.php">Consultar</button>';
echo '<button type="submit" formmethod="post" formaction="consulta D4.php">Consultar</button>';
echo '<button type="submit" formmethod="post" formaction="consulta D5.php">Consultar</button>';
echo '<button type="submit" formmethod="post" formaction="consulta D6.php">Consultar</button>';
?>