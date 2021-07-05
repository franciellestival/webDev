<?php 

session_start();

//credentials

$servername = "gitlab.tadsufpr.net.br";
$username = "web1";
$pass = "tads";
$dbname = "ds122_2020_especial_1";

//conexão

$link = mysqli_connect($servername, $username, $pass, $dbname);

//checar conexão 

if ($link === false){
	die();
}

//criando a database

  $sql = "CREATE DATABASE $dbname";

  if (mysqli_query($link, $sql)) {

      $erro = false;

  } else {

      $erro = true;
  }

//validação

$data = $_POST;
$nome = "";
$snome = "";
$cpf = ""; 
$nasc = "";
$adress = "";
$city = "";
$state = "";
$email = "";
$senha = "";
$senha2 = "";
$plano = ""; 
$erro = false; 

if ($data['senha'] !== $data['senha2']) {
	$_SESSION['messages'][] = 'As senhas não conferem.';
	header('Location: matricula.php');
	exit;
}


if (empty($data['nome']) || 
	empty($data['snome']) ||
	empty($data['cpf']) ||
	empty($data['nasc']) || 
	empty($data['adress']) ||
	empty($data['city']) ||
	empty($data['state']) || 
	empty($data['email']) ||
	empty($data['senha']) || 
	empty($data['senha2']) ||
	empty($data['plano'])) {
	$_SESSION ['messages'][] = 'Por favor preencha todos os campos';
	header('Location: matricula.php');
	exit; 

} else {

	$nome = ($data['nome']);
	$snome = ($data['snome']);
	$cpf = $data['cpf'];
	$nasc = $data['nasc'];
	$adress = $data['adress'];	
	$city = $data['city'];
	$state = $data['state'];
	$email = $data['email'];
	$senha = $data['senha'];
	$senha2 = $data['senha2'];
	$plano = $data['plano'];

	$sql = "SELECT id FROM grr20193854_matricula WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            //Coloca as variáveis em parâmetros
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Estabelece os parâmetros
            $param_email = trim($email);
            
            // Executa a expressão
            if(mysqli_stmt_execute($stmt)){
                /* guarda o resultado */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $_SESSION ['messages'][] = 'Email já existe';
                    header('Location: matricula.php');
                } else{
                    $email = trim($email);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // fecha a requisição
            mysqli_stmt_close($stmt);
        }
} 

//prepração para a inserção da expressão

$sql = "INSERT INTO grr20193854_matricula (nome, snome, cpf, nasc, adress, city, state, email, senha, plano) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 

if($stmt = mysqli_prepare($link, $sql)){

	//liga as variaveis à expressão de preparação como parâmetros
	mysqli_stmt_bind_param($stmt, "ssssssssss", $nome, $snome, $cpf, $nasc, $adress, $city, $state, $email, $senha, $plano);

	//Configura os valores dos parametros

	$nome = $_REQUEST['nome'];
	$snome = $_REQUEST['snome'];
	$cpf = $_REQUEST['cpf'];
	$nasc = $_REQUEST['nasc'];
	$adress = $_REQUEST['adress'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$param_email = $_REQUEST['email'];
	$senha = password_hash($_REQUEST['senha'], PASSWORD_DEFAULT);
	$plano = $_REQUEST['plano'];


            // executa a expressão
            if(mysqli_stmt_execute($stmt)){
                // Redireciona para a página de login
                $_SESSION ['messages'][] = 'Seus dados foram recebidos com sucesso. Faça seu primeiro acesso!';
                header("location: login.php");
            } else{
             	$_SESSION ['messages'][] = 'Algo deu errado!';
				header('Location: matricula.php');
            }
   mysqli_stmt_close($stmt);
  mysqli_close($link);
}
 ?>

<!--- <!DOCTYPE html>
<html>
<head>
  <title>Teste PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="check_form.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="page-header">Teste Formulário PHP</h1>

        <?php// if (!$erro): ?>
          <div class="alert alert-success">
            Dados recebidos com sucesso!
          </div>
        <?php// endif; ?>

      </form>
    </div>
  </div>
</div>
</body>
</html> ---> 
