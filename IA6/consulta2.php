<meta charset="UTF-8">
<?php
$consulta = "epi";
include_once "conexao.php";

echo '<form name="ia">';

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var2` LIKE  '$consulta'
";

$result1 = $conecta -> query($sql2);  

$variavel_array = array( 'chave'  => 'valor');

while($todos = $result1->fetch_row()){
if(in_array("$todos[1]", $variavel_array)) 
{
echo "achei $todos[1] ";
print_r( $variavel_array );
echo "<br>";
}
else
{
	echo "não achei $todos[1] ";
	print_r( $variavel_array );
	echo "<br>";
	$variavel_array[] = $todos[1];	
}
}
eCho "RESULTADO FINAL: ";
print_r( $variavel_array );
?>