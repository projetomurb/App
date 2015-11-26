<table>
	<tr>
		<th>Nome</th>
		<th>Pontuacao</th>
		<th>Ranking</th>
	</tr>

	<?php 
		//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
		$host = "mysql.hostinger.com.br";
		$username = "u468152883_murb";
		$password = "murb123";
		$dbname = "u468152883_app";
		$conexao = mysql_connect($host, $username, $password); 
  		mysql_select_db ($dbname);
		$sql = mysql_query("SELECT * FROM usuarios ORDER BY pontuacao DESC"); 
		$lista=0;	
		$posicao=1;
		while ($dado=mysql_fetch_array($sql)) {
			
		$lista++;
	?>
	
		<tr>
			<td align="center"><?php echo $dado['nome']; ?></td>
			<td align="center"><?php echo $dado['pontuacao']; ?></td>
			<td align="center"><?php echo $posicao; $posicao++;  ?></td>
		</tr>

	<?php 

		}

	?>
</table>	