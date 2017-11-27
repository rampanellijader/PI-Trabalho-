<?php
    $id=$_POST['id_lote_alter'];
    $descricao_lote_alter = $_POST['descricao_lote_alter'];
    $tamanho_lote_alter = $_POST['tamanho_lote_alter'];
    	if ($descricao_lote_alter <>"" or $tamanho_lote_alter<>"");
    		print("Faltou preencher algum campo...");
    		$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
    		mysqli_query($ok, "update lotes set descricao_lote = '$descricao_lote_alter', tamanho_lote = '$tamanho_lote_alter");
    		print("Alteração de Lote:<p>");
    		print("$id <b> $descricao_lote_alter</b> $tamanho_lote_alter<p>");
?>
    		<p><a href="mostrar_lotes.php"> Mostrar </a>


