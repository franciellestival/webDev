<!-- <?php /*
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}*/
?> --->

<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/areaaluno.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Área do Aluno</title>
    </head>

    <body >
        <nav>
            <div class="logo">
                <h4>Cafu</h4>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contato</a></li>
                <li><a href="index.php">Sair</a></li>
            </ul>
        </nav>

    <section>
        <div id="content">
            <div id="section-one">
                <div id="leftCol">
                    <h1>Bem-vindo, Aluno(a)!</h1>
                    <p>Você acaba de ingressar no curso básico da Carreta Furacão School!</p>
                    <p>É com imensa alegria que recebemos você novo aluno na família CAFU!
                    Venha com a gente e aproveite a jornada!</p><br>
                        <h2>► Aula 1 </h2>
                        <p>Em nossa primeira aula, com a ilustríssima participação do nosso companheiro ZÉ GOTINHA, trazemos para nossos alunos a coreografia que será tendência em todo mundo em breve!</p>
                        <p>É isso mesmo amiguinho, em plena pandemia global da COVID-19, já em nossa primeira aula aprenderemos toda a malemolência para você arrasar no caminho de casa para o postinho indo tomar a vacina!</p>
                        <p>Boa aula! #DefendaoSUS</p>
                            <div id="video">
                                <iframe width="500" height="380"
                                    src="https://www.youtube.com/embed/a_48vGHBb8E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe><br>
                            </div>
                        <h2>► Aula 2 </h2>
                        <p>Para nossa segunda aula, temos uma live super especial, com mais de 1:30 de duração de muita dança e alegria.</p>
                        <p>Dance, cante e pratique. Venha curtir com a gente! Confira:</p>
                            <div id="video">
                                <iframe width="500" height="380"
                                    src="https://www.youtube.com/embed/sjp2S0vfXtQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe><br>
                            </div>
                        <h2>► Aula 3 </h2>
                        <p>Na terceira aula, veremos uma coreografia que fez sucesso em rede nacional.</p>
                        <p>É hoje que o filho dança e a mãe vê! Fique agora com nossa apresentação no SBT, na quarta temporada do programa "Qual é o Seu Talento?".</p>
                            <div id="video">
                                <iframe width="500" height="380"
                                    src="https://www.youtube.com/embed/m24diTs0IMI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe><br>
                            </div>
                        <h2>► Aula 4 </h2>
                        <p>Para a quarta e última aula desse nosso curso introdutório, vamos ver agora algo realmente incrível! Você já perguntou o quão legais nossoa saltos podem ser?</p>
                        <p>Não somos Sandy & Júnior (inclusive, quem não gostaria de uma parceria, hein?), mas "vamo pulá"! Só os melhores saltos a seguir!</p>
                            <div id="video">
                                <iframe width="500" height="380"
                                    src="https://www.youtube.com/embed/KEXBYwSjElQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe><br>
                            </div>
                        <p>Acabou! :(</p>
                        <p>E aqui encerremos nosso primeiro curso básico da Carreta Furacão School.</p>
                        <p>Gostou? Conheça nossos demais planos e continue com a gente.</p>
                        <p>Temos diversos benefícios para alunos regressos, confira!</p>
                        <br>
                        <div id="buttonbox">
                            <a href="contact.php"><button class="button"><span>Dúvidas? Entre em contato conosco.</span></button></a>
                        </div>
                </div>
                <div id="rightCol">
                    <div id="aula1">
                    <img src="images/ze-gotinha.jpg" alt="Carreta Furacão e Zé Gotinha juntos pelos SUS">
                    </div>
                    <div id="aula2">
                    <img src="images/carreta2.jpg" alt="Carreta Furacão">
                    </div>
                    <div id="aula3">
                    <img src="images/carreta-sbt.jpg" alt="Carreta Furacão no SBT">
                    </div>
                    <div id="aula4">
                    <img src="images/carreta-pulo.jpg" alt="Carreta Furacão saltando no muro">
                    </div>
                    <div id="botfim">
                    <img src="images/fofao-fim.jpg" alt="Fofão imagem">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <footer>
        <div id="rodape">
        Carreta Furacão School - 2020 ®<br>
        Todos os direitos reservados.
        </div>
    </footer>
    </body>
</html>