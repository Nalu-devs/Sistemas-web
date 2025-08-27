<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$email=		$_POST["email"];
$senha=			   $_POST["senha"];

$con=mysqli_connect("localhost","root","","empresa") or die ("erro!");
$consulta=mysqli_query($con,"select * from usuarios where email='$email' and senha='$senha'");

$reg = mysqli_fetch_array($consulta);

if ($reg==0){
	echo "Não existem registros para a pesquisa!";
	exit;
}


$nome=			$reg["nome"];
$email=		$reg["email"];
$fone= 		   $reg["fone"];
$senha=			   $reg["senha"];
$arquivo = $reg['foto'];
	
	echo   "Nome: $nome<br>
			Email: $email<br>
			Fone: $fone<br>
			<img src = img/$arquivo width=25% heigth=25%>";

?>

</BODY>
</HTML>