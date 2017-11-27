<?php
	$id=$_POST['id'];
	require("conecta.inc.php");
	$ok=conecta_bd() or die ("Não foi possível conectar-se ao servidor");
	$result=mysqli_query($ok, "select * from lotes where id_lote = '$id'");
	$linha=mysqli_fetch_array($result);
	$id_lote=$linha["id_lote"];
	$descricao_lote=$linha["descricao_lote"];
	$tamanho_lote=$linha["tamanho_lote"];

	print("<h3> Deletando o funcionário: </h3><p>");
	print("Id: $id_lote<br>");
	print("Descrição: $descricao_lote<br>");
	print("Tamanho: $tamanho_lote<br>");

	?>

	<form action="confirma_del_lote.php" method="post">
		<input type="hidden" name="id_lote_del" value="<?php print($id_lote)?>">
		<br><input type="submit" value="Deletar Dados">
		<p><a href="mostraf.php">Cancelar e voltar</a>
	</form>


