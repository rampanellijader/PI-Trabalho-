<?php
		$nome_pessoa = $_POST['nome_pessoa'];
		$cpf   = $_POST['cpf'];
		$data_nasc = $_POST['data_nasc'];
		$endereco_pessoa = $_POST['endereco_pessoa'];
		$numero_pessoa  = $_POST['numero_pessoa'];
		$bairro_pessoa  = $_POST['bairro_pessoa'];

			if ($nome_pessoa=="" or $cpf=="" or $data_nasc=="" or $endereco_pessoa=="" or $numero_pessoa=="" or $bairro_pessoa=="") 
			  print("Faltou preencher algum campo...");
		else
		{
		  require("conecta.inc.php");
				$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
				print("Cadastrando um novo usuario:<p>");
				mysqli_query($ok, "insert into pessoas (nome_pessoa, cpf, data_nasc, endereco_pessoa, numero_pessoa, bairro_pessoa) values('$nome_pessoa', '$cpf', '$data_nasc', '$endereco_pessoa', '$bairro_pessoa')") or die ("Não é possível inserir usuário!");
				print("Usuário cadastrado com sucesso: $nomeu!");				
		}

		?>	
			<p><a href="usuario.php">Voltar</a>
			<p><a href="mostrar_usuarios.php">Mostrar</a>
