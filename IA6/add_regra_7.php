<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Add regra</title>
 </head>
 
    <p>ADICIONAR NOVA REGRA</p>

    <form action="add_regra_8.php" method="post">
	 <?php
  $var = $_POST;
    echo '<input type="hidden"  name="nome" value="'.$var['nome'].'" placeholder="Nome" >';
   echo '<input type="hidden"  name="variavel1" value="'.$var['variavel1'].'" placeholder="Nome" >';
      echo '<input type="hidden"  name="valor1" value="'.$var['valor'].'" placeholder="Nome" >';
	        echo '<input type="hidden"  name="condicao" value="'.$var['condicao'].'" placeholder="Nome" >';
	 	        echo '<input type="hidden"  name="variavel2" value="'.$var['variavel2'].'" placeholder="Nome" >';
				 echo '<input type="hidden"  name="valor2" value="'.$var['valor2'].'" placeholder="Nome" >';
				 echo '<input type="hidden"  name="sinal" value="'.$var['sinal'].'" placeholder="Nome" >';
   echo "Regra: $var[nome] ->
		
	
		SE: $var[variavel1] $var[sinal]  $var[valor] $var[condicao] $var[variavel2] = $var[valor2]";
	
	echo ' Peso: <input type="text"  name="peso"   placeholder="peso" >'
	?>
      

     
          <button type="submit" >Avançar</button>
   
    </form>