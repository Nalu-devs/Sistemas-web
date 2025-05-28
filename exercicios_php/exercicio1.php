<html>
    <body>
        <?php
        $c = $_POST["comprimento"]; //Pega a variavel comprimento do html e transforma na variavel c
        $a = $_POST["altura"];//Pega a variavel altura do html e transforma na variavel a
        $l = $_POST["largura"];//Pega a variavel largura do html e transforma na variavel l
        $area = $c * $a * $l; //faz a conta para saber o volume
        echo "A area da caixa é $area";//apresenta o resultado na tela
        ?>
    </body>
</html>