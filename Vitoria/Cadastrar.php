<?php

$servername = "localhost"; 
$username = "gabriel"; 
$password = "p1ctasuncservant"; 
$database = "bancoavitoria"; 


$conn = new mysqli($servername, $username, $password, $database);

// conn = minha variavel de conecxão de banco de dados que recebe uma função de conexão de banco de dados.

// Verifica se a conexão foi estabelecida corretamente
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}
// die é usado para encerrar um excução de uma determinada linha 
// Verifica se o formulário foi submetido

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // REQUEST_METHOD é uma variavel super Global

    // Obtém os dados do formulário
    $nome = $_POST['Nome'];
    $sexo = $_POST['Sexo'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    // Prepara e executa a query para inserir os dados na tabela
    $sql = "INSERT INTO cadastrojogadores (nome, sexo, email, senha) VALUES ('$nome', '$sexo', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>

<!-- $conn = minha variavel de conexão de banco de dados
  -->