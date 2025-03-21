<html>
    <body>
        <?php
        $c = $_POST["comprimento"];
        $a = $_POST["altura"];
        $l = $_POST["largura"];
        $area = $c * $a * $l;
        echo "A area da caixa é $area";
        ?>
    </body>
</html>