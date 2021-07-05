<?php
function verifica_campo($texto){
  $texto = trim($texto);
  $texto = stripslashes($texto);
  $texto = htmlspecialchars($texto);
  return $texto;
}

/* function validaCPF($cpf) { 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
} */ //não to conseguindo chamar a função pra fazer a validação no HTML

$nome = "";
$email = "";
$data = "";
$adress = "";
$city = "";
$cpf = "";
$senha = "";
$senha2 = "";
$erro = false;

$erro_nome = "";
$erro_email = "";
$erro_data = "";
$erro_adress = "";
$erro_city = "";
$erro_cpf = "";
$erro_senha = "";
$erro_senha2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["nome"])){
    $erro_nome = "Nome completo é obrigatório.";
    $erro = true;
  }
  else{
    $nome = verifica_campo($_POST["nome"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["data"])){
    $erro_data = "Data de Nascimento é obrigatória.";
    $erro = true;
  }
  else{
    $data = verifica_campo($_POST["data"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["adress"])){
    $erro_adress = "Enderço é obrigatório.";
    $erro = true;
  }
  else{
    $adress = verifica_campo($_POST["adress"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["city"])){
    $erro_city = "Cidade é obrigatória.";
    $erro = true;
  }
  else{
    $adress = verifica_campo($_POST["city"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["cpf"])){
    $erro_cpf = "CPF é obrigatório.";
    $erro = true;
  }
  else{
    $cpf = verifica_campo($_POST["cpf"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["email"])){
    $erro_email = "E-mail é obrigatório.";
    $erro = true;
  }
  else{
    $email = verifica_campo($_POST["email"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["senha"])){
    $erro_senha = "Senha é obrigatória.";
    $erro = true;
  }
  else{
    $senha = verifica_campo($_POST["senha"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(($_POST["senha"]) != ($_POST["senha2"])) {
    $erro_senha2 = "Senhas não conferem, digite novamente.";
    $erro = true;
  }
  else{
    $senha2 = verifica_campo($_POST["senha2"]);
  }
}

?>
