<?php 
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
$host = "mysql.hostinger.com.br";
$username = "u468152883_murb";
$password = "murb123";
$dbname = "u468152883_app";
    $conexao = mysql_connect($host, $username, $password);
  	mysql_select_db ($dbname);
?>

<?php
// obtém os valores digitados
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// acesso ao banco de dados
$resultado = mysql_query("SELECT * FROM usuarios where usuario='$usuario'");
$linhas = mysql_num_rows ($resultado);
if($linhas==0)  // testa se a consulta retornou algum registro
{
	echo "<html><body>";
	echo "<p align=\"center\">Usuário não encontrado!</p>";
	echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
	echo "</body></html>";
}
else
{
   	if ($senha != mysql_result($resultado, 0, "senha")) // confere senha
	{
		echo "<html><body>";
		echo "<p align=\"center\">A senha está incorreta!</p>";
		echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
		echo "</body></html>";
	}
	else   // usuário e senha corretos. Vamos criar os cookies
    {
        setcookie("nome_usuario", $usuario);
        setcookie("senha_usuario", $senha);
        // direciona para a página inicial dos usuários cadastrados
        header ("Location: poslogin.html");
    }
}
mysql_close($conexao);
?>

