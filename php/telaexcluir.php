<?php
	@$_id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>excluir USUARIOS</title>
	</head>
	<body bgcolor="#E68153">
		<br>
		<font face="Arial">
			<form method="post" action="excluir.php" name="formexcluir" id="idformexcluir">
				<p>DIGITE O ID<input type="text" name="iduser" value="<?php echo $_id; ?>" required> </p>
				</p>
				<br>

				<p><input type="submit" name="btnExcluir" id="idbtnExcluir" value="Excluir"></p>

				<p><input type="reset" name="btnlimpar" id="idbtnlimpar" value="Limpar"></p>
			</form>
			<br><br>
			<br><br>
			<a href="../index.php">VOLTAR AO MENU</a>
		</font>
	</body>
</html>