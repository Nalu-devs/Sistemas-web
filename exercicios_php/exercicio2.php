<html>
<body>
    <?php
    $n1=$_POST["nota1"];
    $n2=$_POST["nota2"];
    $n3=$_POST["nota3"];
    $media=(($n1*2)+($n2*3)+($n3*5))/3;
    echo"Media igual a $media";
    ?>
</body>
</html>