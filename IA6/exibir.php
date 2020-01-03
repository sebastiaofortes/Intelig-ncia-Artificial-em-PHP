<?php
class exibir {
function exibir ($nivel1) {
foreach ($nivel1->variaveis_array as $resultado_array)	/* PERCORRE A VARIAVEL DE ARRAYS */
{
$sql3 = "SELECT * 
FROM  `variaveis` 
WHERE  `nome` LIKE  '$resultado_array'
";
$result2 = $nivel1->conecta -> query($sql3); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */

while($array_resultados2 = $result2->fetch_row() ) { 
echo "<br>PERGUNTA:$array_resultados2[2]<br>";
$final = explode(',', $array_resultados2[1]);	/* SEPARA OS VALORES PELAS VÍRGULAS E OS SALVA NUM ARRAY */
foreach ($final as $final) {
  echo '<input type="checkbox" name="'.$final.'" value="'.$final.'-'.$array_resultados2[0].'"> '.$final.'-'.$array_resultados2[0].' <br>';	/* EXIBE OS VALORES DO ARRAY EM CHECKBOX */
}
}
}
}
}
?>