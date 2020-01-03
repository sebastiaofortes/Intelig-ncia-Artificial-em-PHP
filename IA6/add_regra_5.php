<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Add regra</title>
 </head>
 
    <p>ADICIONAR NOVA REGRA</p>

    <form action="add_regra_6.php" method="post">
	 <?php
  $var = $_POST;
    echo '<input type="hidden"  name="nome" value="'.$var['nome'].'" placeholder="Nome" >';
   echo '<input type="hidden"  name="variavel1" value="'.$var['variavel1'].'" placeholder="Nome" >';
      echo '<input type="hidden"  name="valor" value="'.$var['valor'].'" placeholder="Nome" >';
	        echo '<input type="hidden"  name="condicao" value="'.$var['condicao'].'" placeholder="Nome" >';
			echo '<input type="hidden"  name="sinal" value="'.$var['sinal'].'" placeholder="Nome" >';
   echo "Regra: $var[nome] ->
		
	
		SE: $var[variavel1] $var[sinal]  $var[valor] $var[condicao]";
		?>
	

      
        <select name="variavel2">
		<?php
include_once "conexao.php";

echo '<form name="ia">';

$sql2 = "SELECT * FROM  `variaveis`";

$result1 = $conecta -> query($sql2);  
while(list($s1,$s2) = $result1->fetch_row() ) { 


if($s1 == $var['variavel1'])
{

}
else
{
	echo '<option value="'.$s1.'">'.$s1.'</option>';
}
}


?>
		
		 </select>

     
          <button type="submit" >Avançar</button>
   
    </form>