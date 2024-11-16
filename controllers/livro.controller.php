<?php

require 'dados.php';

$id = $_REQUEST["id"];

$livrosFiltrados = array_filter($livros, fn ($livro) => $livro["id"] == $id);

$livro = array_pop($livrosFiltrados);

view("livro", compact('livro'));