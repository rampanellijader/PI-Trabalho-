<!DOCTYPE html>
<html>
	<head>
		<script language="javascript" src="menu.js"></script>
		<link rel="stylesheet" type="text/css" href="style_index.css">
		<meta charset="utf-8">
		<title>Usuários</title>
	</head>
	<body>
	<table style="box-shadow: 0.3em 0.3em 0.5em black;" bgcolor="white" width="93%" align="center" height="100%" border="0">	
<!--_____________________________________________________________________________Tabela do topo com 3 links e titulo___________________________________________________________________-->		
		<tr>
			<td>
			<table class="tabela1" border="0" width="100%" height="100%" align="center">
				<tr>
					<td colspan="3" height="150">
						<h1>GERENCIAR USUÁRIOS</h1>	
					</td>
				</tr>
				<tr>
					<td class="linkTopo" width="33%"><p class="txtLink" align="center"><b><a href="index.php"> Home </a></b></p></td>
					<td></td>
					<td class="linkTopo" width="33%"><p class="txtLink" align="center"><b> Pesquise aqui! </b></p></td>
					<td></td>
					<td class="linkTopo" width="33%"><p class="txtLink" align="center"><b> Quem somos! </b></p></td>
				</tr>
				</table>
			</td>
		</tr>
<!--______________________________________________Tabela do centro com o conteudo e lista de links com opções referentes a administradora_________________________________________________-->
		<tr>
			<td>
				<table class="" border="0" width="100%" height="100%" align="center">
					<tr>
						<td >
							<tr><td class="menu" class="tgl"><font class="txtMenu"><center><a href=""><a href="Administradora.php"> Administradora</center></font></td><td rowspan="5">
								<form action="usuario_cadastrado.php" method="post" style="display: inline-block; padding-left: 250px;">
									<table border='0' align=‘center'>
											<tr><td align='left' style="margin-left: 55px;">
											Nome: <input  type="text" name="nome_pessoa" style="margin-left: 85px;">
											<br>Cpf: <input type="text" name="cpf" style="margin-left: 101px;">
											<br>Data de nascimento: <input  type="text" name="data_nasc" placeholder="dd-mm-aaaa">
											<br>Endereço: <input type="text" name="endereco_pessoa" style="margin-left: 65px;">
											<br>Número: <input type="text" name="numero_pessoa" style="margin-left: 70px;">
											<br>Bairro: <input type="text" name="bairro_pessoa" style="margin-left: 82px;">
											<br>Você é: <select style="margin-left: 80px;">
											  <option>Selecione</option>
											  <option>Propietário</option>
											  <option>Síndico</option>	
											</select>
											
											
											<br><br><input type="submit" value="Cadastra-se">
											</td></tr>
											</table>
											</form>
								</td></tr><!-- Parte do conteudo localizado a direita dos menus!-->
							<tr><td width="35%" class="menu"><font class="txtMenu"><center><a href="Condominio.php"> Condominio</div></center></font></td></tr><!-- Controlador da largura do menu lateral -->
							<tr><td class="menu"><font class="txtMenu"><center><a href="Lote.php"> Lote</center></font></td></tr>
							<tr><td class="menu"><font class="txtMenu"><center><a href="Usuario.php">Usuário</a></center></font></td></tr>
							<tr><td class="menu"><font class="txtMenu"><center></center></font></td></tr>
							
							
						</td>
					</tr>
				</table>
			</td>
		</tr>

	</table>







	</body>
</html>