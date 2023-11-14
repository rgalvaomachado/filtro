<?php
    include_once('Database.php');

    class FiltroModel extends Database{
        public $id;
        public $nome;
        public $uniqid;
        public $tipo;
        public $cliente;

        function criar(){
            $criar = $this->bd->prepare('INSERT INTO filtro (nome,uniqid,tipo,cliente) VALUES(:nome,:uniqid,:tipo,:cliente)');
            $criar->execute([
                ':nome' => $this->nome,
                ':uniqid' => $this->uniqid,
                ':tipo' => $this->tipo,
                ':cliente' => $this->cliente,
            ]);
            return $this->bd->lastInsertId();
        }

        function buscarTodos(){
            $getTodos =  $this->bd->prepare('SELECT * FROM filtro ORDER BY cliente ASC');
            $getTodos->execute();
            return $getTodos->fetchAll(PDO::FETCH_ASSOC);
        }

        function buscarTipoCliente(){
            $getTodos =  $this->bd->prepare('SELECT * FROM filtro WHERE tipo = :tipo AND cliente = :cliente');
            $getTodos->execute([
                ':tipo' => $this->tipo,
                ':cliente' => $this->cliente,
            ]);
            return $getTodos->fetchAll(PDO::FETCH_ASSOC);
        }

        function buscar(){
            $get =  $this->bd->prepare('SELECT * FROM filtro WHERE id = :id ORDER BY nome ASC');
            $get->execute([
                ':id' => $this->id,
            ]);
            return $get->fetch(PDO::FETCH_ASSOC);
        }

        // function editar(){
        //     $editar = $this->bd->prepare('UPDATE filtro SET nome = :nome WHERE id = :id');
        //     $editar->execute([
        //       ':id'   => $this->id,
        //       ':nome' => $this->nome,
        //     ]);
        //     return $editar->rowCount();
        // }

        function deletar(){
            $deletar = $this->bd->prepare('DELETE FROM filtro where id = :id');
            $deletar->execute([
              ':id' => $this->id,
            ]);
            return $deletar->rowCount();
        }
    }
?>