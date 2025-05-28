<html>
<body>
    <?php
    $num_tabuada=$_POST["num"];
    $i=0;//declaração de variavel
    while($i<=10){//para indice menor ou igual a 10 faça: (dava pra usar o for também)
        $r=$num_tabuada*$i;//r de resultado pega o numero digitado e multiplica do 0 ao 10
        echo"$num_tabuada x $i = $r<br>"; //mostra na tela
        $i++;//incremento
    }
    ?>
</body>
</html>