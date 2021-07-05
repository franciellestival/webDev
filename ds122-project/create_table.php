<?php
require_once "connect.php";

$link = mysqli_connect($servername, $username, $pass, $dbname);

//criando a tabela

$sql = " CREATE TABLE grr20193854_matricula (

id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(30) NOT NULL,
snome VARCHAR(30) NOT NULL,
cpf VARCHAR(30) NOT NULL,
nasc DATE,
adress VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
senha VARCHAR(30) NOT NULL,
plano ENUM ('Basico', 'Intermediario', 'Avançado') NOT NULL
)";

if (mysqli_query($link, $sql)){
	echo "Tabela criada com sucesso.";
} else {
	echo "Erro ao criar tabela $sql. " . mysqli_error($link);
}

//fechar conexão
mysqli_close($link);

?>