<?php

class Usuario
{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public static function make(array $data): Usuario
    {
        $usuario = new self();
        $usuario->id = $data['id'];
        $usuario->nome = $data['nome'];
        $usuario->email = $data['email'];
        $usuario->senha = $data['senha'];
        return $usuario;
    }
}