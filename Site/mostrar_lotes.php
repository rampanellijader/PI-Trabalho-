<?php
require("conecta.inc.php");
$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
$resultado=mysqli_query($ok, "Select * from lotes;") or die ("Não é possível consultar Lotes.");
print("<center><h2>Mostrando os lotes...</h2>");
print("<table border='1' bordercolor='green'>");
print("<tr><td><b>ID do Lote</td>");
print("<td><b>Descrição</td>");
print("<td><b>Tamanho do Lote</td>");
print("<td><b>Deletar</td><td><b>Alterar</td></tr>");

while ($linha=mysqli_fetch_array($resultado))  
{
   $id_lote=$linha["id_lote"];
   $descricao_lote=$linha["descricao_lote"];
   $tamanho_lote=$linha["tamanho_lote"];
   print("<tr><td align='center'>$id_lote</td>");
   print("<td>$descricao_lote</td>");
   print("<td>$tamanho_lote</td>");
   print("<td><a href='deletar_lote.php?id=$id_lote'>Deletar</a></td>");
   print("<td><a href='alterar_lote.php?id=$id_lote'>Alterar</a></td></tr>");  }
   print("</table></center>");
?>
<hr>
<a href="Lote.php">Inserir lote </a>
<p><a href="Index.php">Home</a>
<p><p><a href="consulta.php">Consultar Lotes</a>