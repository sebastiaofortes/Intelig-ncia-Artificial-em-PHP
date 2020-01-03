<meta charset="UTF-8">
<?php
include_once "conexao.php";

echo '<form name="ia">';

$sql2 = "SELECT * FROM  `variaveis`";

$result1 = $conecta -> query($sql2);  
while(list($s1,$s2) = $result1->fetch_row() ) { 
echo "$s1 <br>";
}

echo  '<a href="add_variaveis.php"><b>Adicionar varíaveis</b></a><br>';
?>