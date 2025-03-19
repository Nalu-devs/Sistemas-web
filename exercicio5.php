<html>
<body>
    <?php
    $num_tabuada=$_POST["num"];
    $i=0;
    while($i<=10){
        $r=$num_tabuada*$i;
        echo"$num_tabuada x $i = $r<br>";
        $i++;
    }
    ?>
</body>
</html>