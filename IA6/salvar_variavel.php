<meta charset="UTF-8">
<?php
include_once "conexao.php";

$var = $_POST;





$sql2 = "INSERT INTO  `ia`.`variaveis` (
`nome` ,
`valores`,
`pergunta`
)
VALUES (
'$var[nome]',  '$var[valores]',  '$var[pergunta]'
)";

 
$result1 = $conecta -> query($sql2);


echo "<script type='text/javascript'> alert('Variável cadastrada com sucesso!'); </script>";
echo "<meta http-equiv=refresh content=0;URL=home.php>";

?>