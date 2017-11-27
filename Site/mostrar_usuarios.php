<?php
		require("conecta.inc.php");
		$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		$resultado=mysqli_query($ok, "select * from pessoas");

		 print("<center><h2>Mostrando pessoas...</h2>");
         print("<table border='1' bordercolor='red'>");
         print("<tr><td><b>Código</td>");
         print("<td><b>Nome</td>");
         print("<td><b>CPF</td>");
         print("<td><b>Endereço</td>");
         print("<td><b>Número</td>");
         print("<td><b>Bairro</td>");
         print("<td><b>Deletar</td><td><b>Alterar</td></tr>");
         while ($linha=mysqli_fetch_array($resultado))  
         {
            $nome_pessoa=$linha["nome_pessoa"];
            $cpf=$linha["cpf"];
            $dt_nasc=$linha["dt_nasc"];
            $endereco_pessoa = $linha["endereco_pessoa"];
            $numero_pessoa=$linha["numero_pessoa"];
            $bairro_pessoa=$linha["bairro_pessoa"];
            print("<tr><td align='center'>$idPessoa</td>");
            print("<td>$nomeu</td>");
            print("<td>$cpf</td>");
            print("<td>$dt_nasc</td>");
            print("<td align='center'>$numerou</td>");
            print("<td align='center'>$bairrou</td>");
            print("<td><a href='deletarf.php?cod=$CodigoF'>Deletar</a></td>");
            print("<td><a href='alterarf.php?cod=$CodigoF'>Alterar</a></td></tr>");  }
            print("</table></center>");
         ?>
<hr>
<a href="usuario.php">Inserir Funcionário</a>
