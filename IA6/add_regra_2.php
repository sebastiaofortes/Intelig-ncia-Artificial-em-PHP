<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Add regra</title>
 </head>
 
    <p>ADICIONAR NOVA REGRA</p>

    <form action="add_regra_22.php" method="post">
	 <?php
  $var = $_POST;
  echo '<input type="hidden"  name="nome" value="'.$var['nome'].'" placeholder="Nome" >';
  echo "Regra: $var[nome] ->"
		?>
	
		SE:
      
        <select name="variavel1">
		<?php
include_once "conexao.php";



$sql2 = "SELECT * FROM  `variaveis`";

$result1 = $conecta -> query($sql2);  
while(list($s1,$s2) = $result1->fetch_row() ) { 
echo '<option value="'.$s1.'">'.$s1.'</option>';
}


?>
		
		 </select>

     
          <button type="submit" >Avançar</button>
   
    </form>