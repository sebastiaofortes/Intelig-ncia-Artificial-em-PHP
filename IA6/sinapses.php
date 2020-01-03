<?php
class sinapses {
public function quebrar ($r_formulario) {
	
	$q_formulario = explode('-', $r_formulario);
	echo "<br><br>";
	echo "VALOR-NEURONIO: ";
	print_r($q_formulario);
	return $q_formulario;
}
}

class igual extends sinapses {
public $super_array = array();

public function gerar ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses igual IGUAL </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '='
AND  `condicao` LIKE  'entao'
AND  `val1` LIKE  '$q_formulario[0]'";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
$this->super_array[] = $array_resultados2;
}
}
echo "<br>";
return $this->super_array;
}

public function gerar2 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses diferente IGUAL </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  'd'
AND  `condicao` LIKE  'entao'
AND  `val1` LIKE  '$q_formulario[0]'";

$sql3 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  'd'
AND  `condicao` LIKE  'entao'
";
$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo $result2->num_rows;
if($result2->num_rows <= 0)
{
echo "<br> satisfez a regra <br>";
$result2 = $conecta -> query($sql3); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */

echo "SINAPSES:<br>";
if($result2)
{
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
$this->super_array[] = $array_resultados2;
} // fim while
} // fim if
} // fim if
} // fim foreach
echo "<br>";
return $this->super_array;
} // fim function



public function gerar3 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses menor ou igual IGUAL </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '<='
AND  `condicao` LIKE  'entao'
";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
if($q_formulario[0] <=  $array_resultados2['val1'])
{
echo "satisfez a regra FOI ADICIONADO <br><br>";
$this->super_array[] = $array_resultados2;
} // fim if
else 
{
echo "não satisfez a regra<br>";	
}
} // fim while
} // fim foreach
echo "<br>";
return $this->super_array;
}

public function gerar4 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses maior ou igual IGUAL </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '>='
AND  `condicao` LIKE  'entao'
";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
if($q_formulario[0] >=  $array_resultados2['val1'])
{
echo "satisfez a regra FOI ADICIONADO <br><br>";
$this->super_array[] = $array_resultados2;
} // fim if
else 
{
echo "não satisfez a regra<br>";	
}
} // fim while
} // fim foreach
echo "<br>";
return $this->super_array;
}







public function gerar5 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses menor IGUAL </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '<'
AND  `condicao` LIKE  'entao'
";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
if($q_formulario[0] < $array_resultados2['val1'])
{
echo "satisfez a regra FOI ADICIONADO <br><br>";
$this->super_array[] = $array_resultados2;
} // fim if
else 
{
echo "não satisfez a regra<br>";	
}
} // fim while
} // fim foreach
echo "<br>";
return $this->super_array;
}










public function gerar6 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses maior IGUAL </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '>'
AND  `condicao` LIKE  'entao'
";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
if($q_formulario[0] > $array_resultados2['val1'])
{
echo "satisfez a regra FOI ADICIONADO <br><br>";
$this->super_array[] = $array_resultados2;
} // fim if
else 
{
echo "não satisfez a regra<br>";	
}
} // fim while
} // fim foreach
echo "<br>";
return $this->super_array;
}





















}

class diferente extends sinapses {
public $super_array = array();

public function gerar ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses igual DIFERENTE </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '='
AND  `condicao` LIKE  'nao'
AND  `val1` LIKE  '$q_formulario[0]'";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
$this->super_array[] = $array_resultados2;
}
}
echo "<br>";
return $this->super_array;
}




public function gerar2 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses diferente DIFERENTE </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  'd'
AND  `condicao` LIKE  'nao'
AND  `val1` LIKE  '$q_formulario[0]'";

$sql3 = "SELECT * 
FROM  `regras` 
WHERE  `sinal` =  'd'
AND  `var1` LIKE  '$q_formulario[1]
AND  `condicao` LIKE  'nao'
";
$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
if($result2->num_rows <= 0)
{
echo "<br> satisfez a regra <br>";
$result2 = $conecta -> query($sql3); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";

if($result2)
{
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
$this->super_array[] = $array_resultados2;
}
}
}
}
echo "<br>";
return $this->super_array;
}





public function gerar3 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses menor ou igual DIFERENTE </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '<='
AND  `condicao` LIKE  'nao'
";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
if($q_formulario[0] <=  $array_resultados2['val1'])
{
echo "satisfez a regra FOI ADICIONADO <br><br>";
$this->super_array[] = $array_resultados2;
} // fim if
else 
{
echo "não satisfez a regra<br>";	
}
} // fim while
} // fim foreach
echo "<br>";
return $this->super_array;
}




public function gerar4 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses maior ou igual DIFERENTE </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '>='
AND  `condicao` LIKE  'nao'
";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
if($q_formulario[0] >=  $array_resultados2['val1'])
{
echo "satisfez a regra FOI ADICIONADO <br><br>";
$this->super_array[] = $array_resultados2;
} // fim if
else 
{
echo "não satisfez a regra<br>";	
}
} // fim while
} // fim foreach
echo "<br>";
return $this->super_array;
}



public function gerar5 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses menor DIFERENTE </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '<'
AND  `condicao` LIKE  'nao'
";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
if($q_formulario[0] <  $array_resultados2['val1'])
{
echo "satisfez a regra FOI ADICIONADO <br><br>";
$this->super_array[] = $array_resultados2;
} // fim if
else 
{
echo "não satisfez a regra<br>";	
}
} // fim while
} // fim foreach
echo "<br>";
return $this->super_array;
}





public function gerar6 ($formulario, $conecta) {
$this->super_array = array();
echo "<h1> Sinapses maior DIFERENTE </h1>";
foreach ($formulario as $r_formulario)
{
	$q_formulario = $this->quebrar($r_formulario);

$sql2 = "SELECT * 
FROM  `regras` 
WHERE  `var1` LIKE  '$q_formulario[1]'
AND  `sinal` =  '>'
AND  `condicao` LIKE  'nao'
";

$result2 = $conecta -> query($sql2); 	/* PROCURA NA TABELA VARIAVEIS AS VARIAVEIS QUE ESTÃO NO ARRAY DE VARIAVEIS */
echo "SINAPSES:<br>";
while($array_resultados2 = $result2->fetch_assoc() ) { 

print_r($array_resultados2);
echo "<br>";
if($q_formulario[0] >  $array_resultados2['val1'])
{
echo "satisfez a regra FOI ADICIONADO <br><br>";
$this->super_array[] = $array_resultados2;
} // fim if
else 
{
echo "não satisfez a regra<br>";	
}
} // fim while
} // fim foreach
echo "<br>";
return $this->super_array;
}

















}




function calcular ($super_array, $super_array2) {
echo "<br>";
echo "<h1> Cálculo final </h1>";
$contagem2 = count($super_array) - 1;
$contagem3 = count($super_array2) - 1;
for ($i = 0; $i <= $contagem2; $i++) {
    echo $super_array[$i]['val2'];
	echo $super_array[$i]['peso'];
	for ($i2 = 0; $i2 <= $contagem3; $i2++) {

		 if($super_array[$i]['val2'] == $super_array2[$i2]['val2'])
		 {
			 $super_array[$i]['peso'] =  $super_array[$i]['peso'] - $super_array2[$i2]['peso'];
			 echo " - ";
			 echo $super_array2[$i2]['val2'];
			 echo $super_array[$i]['peso'];
		 }
	}
	echo "<br>";
}
return $super_array;
}


function transformar_array($super_array3) {
$super_array4 = array();
echo "<br>";
echo "<h1> Nova array </h1>";
$contagem = count($super_array3) - 1;
for ($i3 = 0; $i3 <= $contagem; $i3++) {
	$super_array4[] = $super_array3[$i3]['val2']."-".$super_array3[$i3]['var2'];
}
return($super_array4);
}

?>