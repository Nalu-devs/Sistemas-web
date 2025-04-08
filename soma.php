<?php
$x=$_POST["a"];
$y=$_POST["b"];
function soma( $n1,$n2){
    $s = $n1+$n2;//define o que vai acontecer com $s
    return $s;
}
$soma=soma($x,$y);//Cria a variavel soma
echo "A soma de $x e $y é igual a $soma";
?>