<!---  <?php /*
// inicia a sessão
session_start(); 

require_once "connect.php";
 
// Define as variáveis
$data = $_POST;
$email = $senha = "";
 
 if (empty($data['email']) ||
    empty($data['senha'])) {
    $_SESSION ['messages'][] = 'Por favor preencha todos os campos';
    header('Location: login.php');

} else {

    $email = $data['email'];
    $senha = $data['senha']; 
    
        //Seleção na base de dados
        $sql = "SELECT id, email, senha FROM grr20193854_matricula WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            //
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // coloca as variáveis em parâmetros
            if(mysqli_stmt_execute($stmt)){
                // guarda o resultado
                mysqli_stmt_store_result($stmt);
                
                // Checa se o usuário já existe 
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Une os resultados em variáveis 
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_senha);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($senha, $hashed_senha)){
                            //Se a senha está correta começa uma nova sessão
                            session_start();
                            
                            // Guarda as variáveis em sessões  
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // redireciona para area restrita
                            header("location: area_aluno.php");
                        } else{
                            $_SESSION ['messages'][] = 'Senha incorreta';
                            header('Location: login.php');
                        }
                    }
                } else{
                    $_SESSION ['messages'][] = 'Usuário não existe';
                    header('Location: login.php');
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
}

*/ ?> 

Tentamos realizar a implementação do sistema de login, e não deu certo --->

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    
    <body>
        <nav>
            <div class="logo">
                <h4>Cafu</h4>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Planos</a></li>
                <li><a href="contact.php">Contato</a></li>
                <li><a href="matricula.php">Matrícula</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>

        <div class="errocampo">
        <?php require_once 'messages.php';?>
        </div>

        <h1>Já é nosso aluno? Faça seu login!</h1>
        <div class="contactbox">
        <img src="images/login-fofao.png" width="40%" height="40%" id="img-login" alt="img-login"><br>
            <form action="area_aluno.php" method="POST">
                <p>E-mail:</p>
                <input type="email" id="email" name="email"><br>
                <p>Senha:</p>
                <input type="password" id="senha" name="senha"><br>
              <div>
              <a href="matricula.php"><button class="button" onclick="myInputs()"><span>Enviar</span></button><br>
            </div>
            </form><br>
        <p id="recuperar"><a href="contact.php">Esqueci minha senha (?)</a></p><br><br>  
        <p><a href="matricula.php">Ainda não é aluno?<br>Cadastre-se agora mesmo!</a></p>
        </div>
                       
        <footer>
            <div id="rodape">
            Carreta Furacão School - 2020 ®<br>
            Todos os direitos reservados.
            </div>
        </footer>
    </body>
</html>
