<?php

/** @var DB $DB */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $DB->query(
        query: "insert into usuarios (nome, email, senha) values (:nome, :email, :senha)",
        params: [
            "nome" => $_POST['name'],
            "email" => $_POST['email'],
            "senha" => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ]
    );

     header('Location: /login?mensagem=Registrado com sucesso!');
     exit();
}