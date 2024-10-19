<?php

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function login(string $email, string $senha) {
    global $pdo;
    //inserção do usuário adm
    $statement = 
        $pdo->query("SELECT * FROM usuario WHERE email='adm@adm.com'");
    $usuario = $statement->fetchAll(PDO::FETCH_ASSOC);
    //verifica se não existe usuário
    if (!$usuario) {
        $pdo->beginTransaction();
        $senha = password_hash('adm', PASSWORD_BCRYPT);
        $statement =
            $pdo->prepare("INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
        $statement->execute(['Administrador', 'adm@adm.com', $senha, 'adm']);
        $pdo->commit();
    }

    //verifica email e senhado usuário
    $statement = $pdo->prepare("SELECT * FROM usuario WHERE email=?");
    //validar os valores com regex, se é email
    $statement->execute([$email]);
    $usuario = $statement->fetch(PDO::FETCH_ASSOC);
    if ($usuario && password_verify($senha, $usuario['senha']))
        return $usuario;
    else
        return null;
}
?>