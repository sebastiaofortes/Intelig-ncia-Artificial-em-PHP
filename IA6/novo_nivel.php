<?php
class novo_nivel {
public $contador;
public $conecta;
public $objeto;
public $variaveis_array; // ARRAY BIDIMENSIONAL QUE VAI CONTER OS VALORES DA CONSULTA
public $contagem = 0;

public function novo_nivel ($nivel1, $conecta) {
$this->contador = $nivel1->contador + 1;
$this->conecta = $conecta;
foreach ($nivel1->variaveis_array as $variaveis) {
	$this->objeto = new criar($conecta, $variaveis);
	foreach ($this->objeto->variaveis_array as $variaveis) {
		
		$this->variaveis_array[] = $variaveis;
		
	}
	$this->contagem = $this->contagem + count($this->objeto->variaveis_array);
}
}
}
?>