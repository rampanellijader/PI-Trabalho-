<?php
  	$id=$_POST['id'];
	require("conecta.inc.php");
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$resultado=mysqli_query($ok, "select * from lotes where id_lote = '$id' ") or die("Não é possível retornar dados dos Lotes!");
	$linha=mysqli_fetch_array($resultado);
	$id_lote=$linha["id_lote"];
	$descricao_lote=$linha["descricao_lote"];
    $tamanho_lote=$linha["tamanho_lote"];
    print("<h3>Alterando os dados do Lote:</h3><p>");
?>

 	<form action="confirma_alterar_lote.php" method="post">
 		Id do lote: <?php print($id_lote)?>   
 		<input type="hidden" name="id_lote_alter" value="<?php print($id_lote)?>">
 		<br>Descrição:<input type="text" name="descricao_lote_alter" value="<?php print($descricao_lote)?>">
 		<br>Tamanho:<input type="text" name="tamanho_lote_alter" value="<?php print($tamanho_lote)?>">

 		<p><input type="submit" value="Alterar Dados">
	</form>
		<p><a href="mostrar_lotes.php">Cancelar e voltar</a>
