<html>
<body>
    <?php
        $km= $_POST ["quilometro"];
        $gaso= $_POST ["gasolina"];
        $media=$km/$gaso;
        echo"A media de gasto é $media";
    ?>
</body>
</html>