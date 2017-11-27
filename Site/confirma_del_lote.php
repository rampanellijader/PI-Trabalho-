<?php
	$id=$_POST['id'];
	require("conecta.inc.php");
	$ok= conecta_bd() or die ("Não é possível conectar-se ao servidor");
	mysqli_query($ok, "delete from lotes where id_lote = '$id'") or die ("Não é possível deletar lote!");
	print("Lote '$id' deletado com sucesso!");
?>
	<p><a href="mostra_lotes.php">Mostrar</a>
