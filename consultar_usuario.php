<?php include_once"config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php 

    $email = $_POST['email']?? "";
    $senha = $_POST['senha']?? "";


// Usuário não forneceu a senha ou o login
if(!$email || !$senha)
{
	echo "<script>alert('Você deve fornecer a informação de login e senha!'); window.location = 'login.php';</script>";
	exit;
}

/**
* Executa a consulta no banco de dados.
* Caso o número de linhas retornadas seja 1 o login é válido,
* caso 0, inválido.
*/
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_select_db($conn, '$dbname');
$SQL = "SELECT nome,email,senha FROM tbformulario WHERE email ='$email'";
$result_id = mysqli_query($conn, $SQL);
$total = mysqli_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)
{
	// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
	$dados = mysqli_fetch_array($result_id);

	// Agora verifica a senha
	if(!strcmp($senha, $dados["senha"]))
	{
		// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
        $nome = $dados["nome"];
        echo "<script>alert('Login realizado com sucesso! Bem-vindo $nome'); window.location = 'index.php';</script>";
		exit;
	}
	// Senha inválida
	else
	{
	 "Senha inválida!";
     echo "<script>alert('Senha inválida!'); window.location = 'login.php';</script>";
	exit;
	}
}
	// Login inválido
else
{
    echo "<script>alert('O login fornecido por você é inexistente!'); window.location = 'login.php';</script>";
	exit;
}
    ?>
</body>
</html>