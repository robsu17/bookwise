<?php

$pesquisa = data_get('pesquisa', $_REQUEST);

$livros = (new DB())->livros($pesquisa);

view('index', compact('livros'));