<!DOCTYPE html>
<html>
	<head>
		<script language="javascript" src="menu.js"></script>
		<link rel="stylesheet" type="text/css" href="style_index.css">
		<meta charset="utf-8">
		<title>Administradora</title>
	</head>
	<body>
	<table style="box-shadow: 0.3em 0.3em 0.5em black;" bgcolor="white" width="93%" align="center" height="100%" border="0">	
<!--_____________________________________________________________________________Tabela do topo com 3 links e titulo___________________________________________________________________-->		
		<tr>
			<td>
			<table class="tabela1" border="0" width="100%" height="100%" align="center">
				<tr>
					<td colspan="3" height="150">
						<h1>GERENCIAR ADMINISTRADORA</h1>	
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
								<form action="inseridof.php" method="get" style="display: inline-block; padding-left: 250px;">
									<table border='0' align=‘center'>
											<tr><td align='left'>
											Cnpj: <input type="text" name="cnpj"  style="margin-left: 60px;">
											<br>Razao Social: <input type="text" name="razao_social"  style="margin-left: 7px;">
											<br>Endereço: <input type="text" name="enderecoa"  style="margin-left: 31px;">
											<br>Número: <input type="text" name="numeroa"  style="margin-left: 39px;">
											<br>Complemento: <input type="text" name="complementoa" >
											<br>Bairro: <input type="text" name="bairroa"  style="margin-left: 50px;">
											
											<br><br><input type="submit" value="Cadastrar Adm Imobiliaria">
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