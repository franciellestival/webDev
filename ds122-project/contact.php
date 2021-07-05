<?php
  require("check_form.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
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
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if (!$erro): ?>
          <?php
                $nome = "";
                $email = "";
                $sobrenome = "";
                $comentario = "";
              ?>
         <?php endif; ?> 
         <?php endif; ?> 
    <h1>Fale Conosco:</h1>
    <div class="contactbox">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>Nome:</p>
          <input type="text" id="fname" name="nome" placeholder="<?php echo $nomeErr;?>" value="<?php echo $nome;?>">
        <p>Sobrenome:</p>
          <input type="text" id="lname" name="sobrenome" placeholder="<?php echo $sobrenomeErr;?>" value="<?php echo $sobrenome;?>">
        <p>Seu E-mail Preferido:</p>
          <input type="text" id="mail" name="email" placeholder="<?php echo $emailErr;?>" value="<?php echo $email;?>">
        <p>Comentários:</p><br>
          <textarea type="text" id="mail" name="comentario" rows="5" cols="65" placeholder="<?php echo $comentarioErr;?>" value="<?php echo $email;?>"></textarea><br>
        <button class="button" type="submit" value="Submit" onclick="myInputs()"><span>Enviar</span></button>
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