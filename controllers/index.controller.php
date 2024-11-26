<?php

/**
 * @var DB $DB
 */

$pesquisa = data_get('pesquisa', $_REQUEST);

$livros = $DB
    ->query(
        "SELECT * FROM livros WHERE titulo LIKE :pesquisa;",
        Livro::class,
        ['pesquisa' => "%$pesquisa%"]
    )
    ->fetchAll();

view('index', compact('livros'));