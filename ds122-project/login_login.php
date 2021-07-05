<?php
// Initialize the session
session_start(); 
 
// Include config file
require_once "connect.php";
 
// Define variables and initialize with empty values
$data = $_POST;
$email = $senha = "";
 
 if (empty($data['email']) ||
    empty($data['senha'])) {
    $_SESSION ['messages'][] = 'Por favor preencha todos os campos';
    header('Location: login_login.php');
    exit; 

} else {

    $email = $data['email'];
    $senha = $data['senha']; 
    
        // Prepare a select statement
        $sql = "SELECT id, email, senha FROM grr20193854_matricula WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_senha);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($senha, $hashed_senha)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: area_aluno.php");
                        } else{
                            $_SESSION ['messages'][] = 'Senha incorreta';
                            header('Location: login_login.php');
                        }
                    }
                } else{
                    $_SESSION ['messages'][] = 'Usuário não existe';
                    header('Location: login_login.php');
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Teste PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="page-header">Teste Formulário PHP</h1>

        <?php if (!$erro): ?>
          <div class="alert alert-success">
            Dados recebidos com sucesso:
          </div>
        <?php endif; ?>

      </form>
    </div>
  </div>
</div>
</body>
</html> 