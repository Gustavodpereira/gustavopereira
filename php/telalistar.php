<!DOCTYPE html>
<html>
<head>
	<title>LISTAGEM EM TELA</title>
</head>
<body bgcolor="#AEAEAE">
	<br>
	<font face = "Arial">
		<center>
			<h1>LISTA DE ALUNOS</h1>
			<br><hr><br><br>
			
			<table cellspacing="2px" cellpadding="5px" border="3px">
				<tr>
					<th align="center">ID</th>
					<th align="center">NOME</th>
					<th align="center">E-MAIL</th>
					<th align="center">ATUALIZAR</th>
					<th align="center">EXCLUIR</th>
				</tr>
<?php
	include_once("../db/conexao.php");
	$_sql = "SELECT * FROM aluno";
	$_query = mysqli_query($_conexao, $_sql) or die(mysqli_error());

	while($_line = mysqli_fetch_array($_query ))
	{ 

?>
	<tr>
		<td align="center"><?php echo $_line['id']; ?></td>
		<td align="left"><?php echo $_line['nome']; ?></td>
		<td align="left"><?php echo $_line['email']; ?></td>
		<td align="center"><a href="telaatualizar.php?id=<?php echo $_line['id'];?>">Atualizar</a></td>
		<td align="center"><a href="telaexcluir.php?id=<?php echo $_line['id'];?>">Excluir</a></td>
		
	</tr>

<?php
	}
?>
			</table>
			<br><br>
			<a href="../index.php">VOLTAR AO MENU</a>
		</center>
	</font>

</body>
</html>