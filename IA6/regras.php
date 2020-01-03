<?php
include_once "conexao.php";

echo '<form name="ia">';

$sql2 = "SELECT * FROM  `regras`";

$result1 = $conecta -> query($sql2);  
while(list($s1,$s2, $s3, $s4, $s5, $s6, $s7, $s8) = $result1->fetch_row() ) { 
echo "<b> $s1: </b> se <b> $s2 </b> <b> $s3 </b> <b> $s4 </b> <b> $s5 </b><b> $s6 </b> = <b> $s7 </b>  com peso  $s8<br>";
}

echo  '<a href="add_regra_1.php"><b>Adicionar Regra</b></a><br>';
?>