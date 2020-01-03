<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Add regra</title>
 </head>
 
    <p>ADICIONAR NOVA REGRA</p>

    <form action="add_regra_7.php" method="post">
	 <?php
  $var = $_POST;
    echo '<input type="hidden"  name="nome" value="'.$var['nome'].'" placeholder="Nome" >';
   echo '<input type="hidden"  name="variavel1" value="'.$var['variavel1'].'" placeholder="Nome" >';
      echo '<input type="hidden"  name="valor" value="'.$var['valor'].'" placeholder="Nome" >';
	  	        echo '<input type="hidden"  name="condicao" value="'.$var['condicao'].'" placeholder="Nome" >';
	 	        echo '<input type="hidden"  name="variavel2" value="'.$var['variavel2'].'" placeholder="Nome" >';
				echo '<input type="hidden"  name="sinal" value="'.$var['sinal'].'" placeholder="Nome" >';
					 	   
   echo "Regra: $var[nome] ->
		
	
		SE: $var[variavel1] $var[sinal]  $var[valor] $var[condicao] $var[variavel2]";
		?>
        <select name="valor2">
		<?php
include_once "conexao.php";

echo '<form name="ia">';

$sql2 = "SELECT * 
FROM  `variaveis` 
WHERE  `nome` LIKE  '$var[variavel2]'
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