<html>
<body>
    <?php
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $n3=$_POST["num3"];
    if($n1>$n2 && $n1>$n3){
        echo"O maior número é o 1º: $n1";
    }
    else if($n2>$n1 && $n2>$n3){
        echo"O maior número é o 2º: $n2";
    }
    else if($n3>$n1 && $n3>$n2){
        echo"O maior número é o 3º: $n3";
    }
    else{
        echo"Os números são inguais";
    }
    ?>
</body>
</html>