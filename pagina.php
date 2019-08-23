<?php

$nome = $_GET["nome"];
$email = $_GET["email"];
$login = $_GET["login"];
$senha = $_GET["senha"];

try {
    $conexao = new PDO("mysql:host=localhost;
        dbname=minicurso;
        port=3306",
        "root",
        "");

    $stmt = $conexao->prepare("insert into usuario (nome, email, login, senha)
    value
    (:nome,:email,:login,:senha)");

    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":login", $login);
    $stmt->bindValue(":senha", $senha);
    
    $stmt->execute();
    echo "Usuário cadastrado com sucesso!";

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>