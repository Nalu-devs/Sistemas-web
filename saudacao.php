<?php
function saudacao(){//função saudacao
    echo"Olá, mundo";
}
function saudacaoPersonalizada($nome){
    echo"Olá, $nome";
}
saudacao();//chama a função saudação e apresenta a mensagem
echo "<br><br>";
saudacaoPersonalizada("Maria");//chama a função saudacaoPersonalizada e apresenta com o nome Maria
?>