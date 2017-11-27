<!DOCTYPE html>
<html>
	<head>
		<script language="javascript" src="menu.js"></script>
		<link rel="stylesheet" type="text/css" href="style_index.css">
		<meta charset="utf-8">
		<title>Lote</title>
	</head>
	<body>
	<table style="box-shadow: 0.3em 0.3em 0.5em black;" bgcolor="white" width="93%" align="center" height="100%" border="0">	
<!--_____________________________________________________________________________Tabela do topo com 3 links e titulo___________________________________________________________________-->		
		<tr>
			<td>
			<table class="tabela1" border="0" width="100%" height="100%" align="center">
				<tr>
					<td colspan="3" height="150">
						<h1>GERENCIAR LOTES</h1>	
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
							<tr><td class="menu" class="tgl"><font class="txtMenu"><center><a href=""><a href="Administradora.php"> Administradora</center></font></td><td rowspan="5" >
									<form action="lote_cadastrado.php" method="post" style="display: inline-block; padding-left: 250px;">
									<table border='0' align=‘center'>
											<tr><td align='left'>
											<br>Descrição: <input type="text" name="descricao_lote" style="margin-left: -3px;">
											<br>Tamanho: <input type="text" name="tamanho_lote" style="margin-left: 2px;">
													
											<br><br><input type="submit" value="Cadastrar Lote">
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