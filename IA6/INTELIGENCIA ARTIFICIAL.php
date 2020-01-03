<meta charset="UTF-8">
<?php
include_once "conexao.php";

echo '<form name="ia">';

$sql2 = "SELECT * FROM  `variaveis`";

$result1 = $conecta -> query($sql2);  
$result2 = $conecta -> query($sql2); 
$result3 = $conecta -> query($sql2); 
$result4 = $conecta -> query($sql2); 
$result5 = $conecta -> query($sql2); 

while(list($s1,$s2) = $result1->fetch_row() ) { 

$final = explode(',', $s2);
foreach ($final as $final) {
  echo '<input type="checkbox" name="'.$final.'" value="'.$final.'"> '.$final.' <br>';
}
}


while($todos = $result2->fetch_assoc()){

print_r( $todos );
}
eCho "<BR>";

while($todos = $result3->fetch_row()){

print_r( $todos );
}
eCho "<BR>";

while($todos = $result4->fetch_row()){

echo '<input type="checkbox" name="'.$todos[1].'" value="'.$todos[1].'"> '.$todos[1].' <br>';
}
eCho "<BR>";

while($total = $result5->fetch_assoc()){
eCho "<BR>";
foreach ($total as $total) {
    echo "Valor: $total";
}
}

eCho "<BR>";

echo '



<input type="submit" formaction="page2.php" formmethod="get" value="Submit using GET">
<input type="submit" formaction="page2.php" formmethod="post" value="Submit using POST">

</form>

';

?>