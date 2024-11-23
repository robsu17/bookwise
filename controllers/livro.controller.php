<?php

$id = $_REQUEST["id"];

$livro = (new DB)->livroPorId($id);

view("livro", compact('livro'));