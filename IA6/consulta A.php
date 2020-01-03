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
$contador = 0;
print_r( $variavel_array );
foreach ($variavel_array as $variavel_array2) {
    if($variavel_array2 == $todos[1])
	{
		
		++$contador;
	}
	else
	{
		
		
	}

}
echo "$contador";	
	
	
	
	if($contador <= 0)
{
	echo " não encontrado<br>";
	$variavel_array[] = $todos[1];
}
else
{
	echo " encontrado<br>";
}
	
}
eCho "RESULTADO FINAL: ";
print_r( $variavel_array );
eCho "<BR>";

?>