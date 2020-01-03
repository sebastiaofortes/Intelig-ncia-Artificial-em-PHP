<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Add regra</title>
 </head>
 
    <p>ADICIONAR NOVA REGRA</p>

    <form action="add_regra_5.php" method="post">
	 <?php
  $var = $_POST;
  echo '<input type="hidden"  name="nome" value="'.$var['nome'].'" placeholder="Nome" >';
   echo '<input type="hidden"  name="variavel1" value="'.$var['variavel1'].'" placeholder="Nome" >';
      echo '<input type="hidden"  name="valor" value="'.$var['valor'].'" placeholder="Nome" >';
	  echo '<input type="hidden"  name="sinal" value="'.$var['sinal'].'" placeholder="Nome" >';
  echo "Regra: $var[nome] ->
		
	
		SE: $var[variavel1] $var[sinal] $var[valor]";
      ?>
        <select name="condicao">
		<?php
include_once "conexao.php";

echo '<form name="ia">';



  echo '<option value="entao">então</option>';
  echo '<option value="nao">não</option>';




?>
		
		 </select>

     
          <button type="submit" >Avançar</button>
   
    </form>