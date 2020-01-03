<?php
include_once "conexao.php";

$var = $_POST;





$sql2 = "INSERT INTO `ia`.`regras` (`nome`, `var1`, `sinal`, `val1`, `condicao`, `var2`, `val2`, `peso`) 
VALUES ('$var[nome]', '$var[variavel1]', '$var[sinal]', '$var[valor1]', '$var[condicao]', '$var[variavel2]', '$var[valor2]', $var[peso]);";

 
$result1 = $conecta -> query($sql2);


echo "<script type='text/javascript'> alert('Regra cadastrada com sucesso!'); </script>";
echo "<meta http-equiv=refresh content=0;URL=home.php>";

?>