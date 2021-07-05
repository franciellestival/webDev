<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos</title>
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
    
    <h1>Você pode contratar os planos:</h1>

    <table id="product">
        <tr>
            <th>Básico</th>
            <th>Intermediario</th>
            <th>Avançado</th>
        </tr>
        <tr>
            <td>4 aulas online</td>
            <td>1 aula por semana</td>
            <td>2 aulas por semana</td>
        </tr>
        <tr>
            <td>Sem tutor</td>
            <td>Sem tutor</td>
            <td>Tutor 24h</td>
        </tr>
        <tr>
            <td>-</td>
            <td>Clube de Vantangens</td>
            <td>Clube de Vantagens<br>+ Material Exclusivo</td>
        </tr>
        <tr>
            <td>R$ 19,99 uma única vez</td>
            <td>R$ 20,99 por mês</td>
            <td>R$ 30,99 por mês</td>
        </tr>
    </table>
    <h2>Venha fazer parte da família CAFU!</h2>
    <div id="video">
    <iframe width="840" height="630"
            src="https://www.youtube.com/embed/tmJ0tzAZ4aM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe><br>
    </div>
    <!--Popup de saída do site-->
<!--Falta por a função de fechar popup-->
<div id="popup" class="popup-wrapper">
    <div class="popup-container">
      <h1 class="titulo">Não saia do site ainda!</h1>
      <p class="text">Clique em qualquer lugar para fechar o popup! 💁</p>
    </div>
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