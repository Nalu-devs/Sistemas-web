<html>
<body>

<?php

$arquivo = $_FILES['arquivo']['name'];
$destino = 'c:/xampp/htdocs/imagens/img/' . $arquivo;
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
move_uploaded_file( $arquivo_tmp, $destino);
echo "arquivo <b><i>$arquivo</i></b> movido para a pasta <b>img/</b><br>";
echo "<img src = img/$arquivo width=25% heigth=25%>";

?>

</body>
</html>