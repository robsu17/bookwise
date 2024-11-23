<?php

class Livro
{
    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $ano_de_lancamento;
    public $usuario_id;

    public static function make(array $item): Livro
    {
        $self = new self();
        $self->id = $item['id'];
        $self->titulo = $item['titulo'];
        $self->autor = $item['autor'];
        $self->descricao = $item['descricao'];
        $self->ano_de_lancamento = $item['ano_de_lancamento'];
        $self->usuario_id = $item['usuario_id'];
        return $self;
    }
}