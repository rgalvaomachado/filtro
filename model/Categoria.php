<?php
    include_once('Database.php');

    class Categoria extends Database{
        public $id;
        public $nome;
        public $path;
        public $uniqid;
        public $tipo;

        function criar(){
            $criar = $this->bd->prepare('INSERT INTO categoria (nome,path,uniqid,tipo) VALUES(:nome,:path,:uniqid,:tipo)');
            $criar->execute([
                ':nome' => $this->nome,
                ':path' => $this->path,
                ':uniqid' => $this->uniqid,
                ':tipo' => $this->tipo,
            ]);
            return $this->bd->lastInsertId();
        }

        function buscarTodos(){
            $getTodos =  $this->bd->prepare('SELECT * FROM categoria WHERE tipo = :tipo ORDER BY nome ASC');
            $getTodos->execute([
                ':tipo' => $this->tipo,
            ]);
            return $getTodos->fetchAll(PDO::FETCH_ASSOC);
        }

        function buscar(){
            $get =  $this->bd->prepare('SELECT * FROM categoria WHERE tipo = :tipo ORDER BY nome ASC');
            $get->execute([
                ':tipo' => $this->tipo,
            ]);
            return $get->fetch(PDO::FETCH_ASSOC);
        }

        function editar(){
            $editar = $this->bd->prepare('UPDATE sala SET nome = :nome WHERE id = :id');
            $editar->execute([
              ':id'   => $this->id,
              ':nome' => $this->nome,
            ]);
            return $editar->rowCount();
        }

        function deletar(){
            $deletar = $this->bd->prepare('DELETE FROM sala where id = :id');
            $deletar->execute([
              ':id' => $this->id,
            ]);
            return $deletar->rowCount();
        }
    }
?>