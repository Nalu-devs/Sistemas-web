<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$nome=			$_POST["nome"];
$email=		$_POST["email"];
$fone= 		   $_POST["fone"];
$senha=			   $_POST["senha"];
$arquivo = $_FILES['arquivo']['name'];
$destino = 'c:/xampp/htdocs/imagens/img/' . $arquivo;
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
move_uploaded_file( $arquivo_tmp, $destino);

$con=mysqli_connect("localhost","root","","empresa") or die ("erro!");

$in = "insert into usuarios values ( null,
									'$nome',
									'$email',
									'$fone',
									'$senha', 
									'$arquivo')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   Nome:		$nome<BR>
   Email:		$email<BR>
   Fone:		$fone<BR>
   Senha:			$senha<BR>
   Arquivo:			$arquivo<hr>";
   
   echo "Registro incluído com sucesso!<BR>";
   echo "<img src = img/$arquivo width=25% heigth=25%>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>

