<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/matricula.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realize sua Matrícula:</title>
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
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    
    <h1>Matrícula:</h1><br>

    <div class="errocampo">
    <?php require_once 'messages.php';?>
    </div>
    <div class="contactbox">
        <form enctype="multipart/form-data" id="form-test" class="form-inline" method="POST" action="insert.php">
            <section>
                <h3> Informações pessoais:</h3>

                <label for="InputNome">Nome* :
                    <input type="text" id="nome" name="nome">
                </label>

                <br><label for="InputSnome">Sobrenome* :
                    <input type="text" id="snome" name="snome">
                </label>

                <br><label for="InputDoc">CPF* :
                    <input type="text" id="cpf" name="cpf">
                </label> 
     
                <br><label for="InputBday">Data de nascimento* :
                    <?php date_default_timezone_set("America/Sao_Paulo")?>
                    <input type="date" min="1900-01-30" max="<?php echo date('Y-m-d');?>" name="nasc" id = "nasc">

                <br><label for="InputAdress">Endereço* :
                    <input type="text" id="adress" name="adress">
                </label>
                <br><label for="InputCity">Cidade* :
                    <input type="text2" id="city" name="city">
                </label>
                <br><label for="InputState">Estado* :
                    <input type="text2" id="state" name="state">
                </label>
            </section>

            <section>
            <br>              
                <fieldset>
                  <label>Plano escolhido:</label>
                  <ul>
                      <li>
                        <label for="basico">
                          <input type="radio" id="plano" name="plano" value="Básico" >
                          Básico
                        </label>        
                      </li>
                      <li>
                        <label for="intermediário">
                          <input type="radio" id="plano2" name="plano" value="Intermediário">
                          Intermediário
                        </label>
                      </li>
                      <li> 
                        <label for="avancado"> 
                          <input type="radio" id="plano3" name="plano" value="Avançado">
                          Avançado 
                        </label> 
                      </li>
                  </ul>
                </fieldset>
                <br> 
                <!-- O tipo radio deveria permitir uma opção só, certo? Aqui ele tá deixando marcar várias -->
                <section>
                <h3> Informações de Login:</h3>
                
                <label for="InputEmail">E-mail* :
                    <input type="email" id="email" name="email">
                <br><label for="InputSenha">Senha* :
                    <input type="password" id="senha" name="senha">
                </label>
                <br><label for="InputSenha2">Confirme sua senha* :
                    <input type="password" id="senha2" name="senha2">
                </label>
            </section>
   
             <br><button type="submit" class="button"><span>Enviar</span></button><br>
            </ul>
        </form>
    </div>
    <footer>
        <div id="rodape">
        Carreta Furacão School - 2020 ®<br>
        Todos os direitos reservados.
        </div>
    </footer>     
  <script src="js/index.js"></script>
</body>
</html>            



