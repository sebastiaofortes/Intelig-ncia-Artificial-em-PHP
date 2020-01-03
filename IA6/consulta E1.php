<meta charset="UTF-8">
<?php
include_once "conexao.php";

echo 'Selecione o objetivo da consulta:';


$sql2 = "SELECT * FROM  `variaveis`";

$result1 = $conecta -> query($sql2);  
while(list($s1,$s2) = $result1->fetch_row() ) {  
echo "<form>";
 echo '<input type="hidden" name="variavel" value='.$s1.'>
 <button type="submit" formmethod="get" formaction="consulta E2.php">'."$s1".'</button>';
 echo "</form>";
}

