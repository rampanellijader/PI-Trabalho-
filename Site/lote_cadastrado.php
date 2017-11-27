<?php

	    
		$descricao_lote = $_POST['descricao_lote'];
		$tamanho_lote = $_POST['tamanho_lote'];
		

			if ($descricao_lote=="" or $tamanho_lote=="") 
			  print("Faltou preencher algum campo...");
		
		 else
		 	{ require("conecta.inc.php");
				$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
				print("Cadastrando um novo Lote:<p>");
				mysqli_query($ok, "insert into lotes ( descricao_lote, tamanho_lote) values('$descricao_lote', '$tamanho_lote')")  or die ("Não é possível inserir lote!");
				print("Lote: $descricao_lote cadastrado com sucesso!");				
		}

		?>	
			<p><a href="Lote.php">Voltar</a>
			<p><a href="mostrar_lotes.php">Mostrar</a>

