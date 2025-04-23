<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$cpf=			$_POST["cpf"];
$nome=		$_POST["nome"];
$fone= 		   $_POST["fone"];
$data=			   $_POST["data"];
$receita=			   $_POST["receita"];
$quadro=	$_POST["quadro_clinico"];
$con=mysqli_connect("localhost","root","","clinica") or die ("erro!"); //faz a conexão com o banco de dados detran

$in = "insert into pacientes values('$cpf',
									         '$nome',
									         '$fone',
									         '$data',
									         '$receita', 
									         '$quadro')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   cpf:		$cpf<BR>
   nome:		$nome<BR>
   fone:		$fone<BR>
   data:			$data<BR>
   receita:			$receita<BR>
   quadro:   $quadro<hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>

