<?php

/**
 * @var DB $DB
 */

$livro = $DB
    ->query(
        "SELECT * FROM livros WHERE id = :id",
        Livro::class,
        ['id' => $_REQUEST["id"]]
    )->fetch();

view("livro", compact('livro'));