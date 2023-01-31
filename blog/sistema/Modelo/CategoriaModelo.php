<?php

namespace sistema\Modelo;
use sistema\Nucleo\Conexao;


class CategoriaModelo{
    public function busca(): array{

        $query = "SELECT * FROM categorias WHERE status=1 ORDER BY id DESC";
        $stmt = Conexao::getInstancia()->query($query);
        $result = $stmt->fetchAll();       
       
        return $result;
    }

    public function buscaPorId(int $id): bool|object{
        $query = "SELECT * FROM categorias WHERE id = {$id}";
        $stmt = Conexao::getInstancia()->query($query);
        $result = $stmt->fetch();       
       
        return $result;
    }
}