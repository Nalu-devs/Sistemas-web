<?php
function saudacao(){
    echo"Olá, mundo";
}
function saudacaoPersonalizada($nome){
    echo"Olá, $nome";
}
saudacao();
echo "<br><br>";
saudacaoPersonalizada("Maria");
?>