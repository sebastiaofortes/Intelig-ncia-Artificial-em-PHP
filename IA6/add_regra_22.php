<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Add regra</title>
 </head>
 
    <p>ADICIONAR NOVA REGRA</p>

    <form action="add_regra_3.php" method="post">
	 <?php
  $var = $_POST;
  echo '<input type="hidden"  name="nome" value="'.$var['nome'].'" placeholder="Nome" >';
   echo '<input type="hidden"  name="variavel1" value="'.$var['variavel1'].'" placeholder="Nome" >';
  echo "Regra: $var[nome] ->
		
	
		SE: $var[variavel1]";
      ?>
        <select name="sinal">
		<option value="=">=</option>
		<option value="d">≠</option>
		<option value="<="><=</option>
		<option value=">=">>=</option>
		<option value="<"><</option>
		<option value=">">></option>
		<?php
include_once "conexao.php";



$sql2 = "SELECT * 
FROM  `variaveis` 
WHERE  `nome` LIKE  '$var[variavel1]'
LIMIT 0 , 30";

$result1 = $conecta -> query($sql2);  
while(list($s1,$s2) = $result1->fetch_row() ) { 


$final = explode(',', $s2);
foreach ($final as $final) {
  echo '<option value="'.$final.'">'.$final.'</option>';
}

}


?>
		
		 </select>

     
          <button type="submit" >Avançar</button>
   
    </form>