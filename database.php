<?php

class DB {

    private PDO $db;

    public function __construct() {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    /**
     * @param $pesquisa
     * @return array<Livro>
     */
    public function livros($pesquisa = ''): array
    {
        $prepare = $this->db->prepare("SELECT * FROM livros WHERE titulo like :titulo");
        $prepare->bindValue(':titulo', "%$pesquisa%");
        $prepare->execute();

        return $prepare->fetchAll(PDO::FETCH_CLASS, Livro::class);
    }

    /**
     * @param $id
     * @return Livro
     */
    public function livroPorId($id): Livro
    {
        $prepare = $this->db->prepare('SELECT * FROM livros WHERE id = :id');
        $prepare->bindValue(':id', $id);
        $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $prepare->execute();

        return $prepare->fetch();
    }
}