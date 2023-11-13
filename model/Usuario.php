<?php
    include_once('Database.php');

    class UsuarioModel extends Database{
        public $id;
        public $nome;
        public $email;
        public $senha;
        public $tipo;
        public $cliente;

        function criar(){
            $criar = $this->bd->prepare('INSERT INTO usuario (nome,email,senha,tipo,cliente) VALUES(:nome,:email,:senha,:tipo,:cliente)');
            $criar->execute([
                ':nome' => $this->nome,
                ':email' => $this->email,
                ':senha' => $this->senha,
                ':tipo' => $this->tipo,
                ':cliente' => $this->cliente,
            ]);
            return $this->bd->lastInsertId();
        }

        function buscarTodos(){
            $getTodos =  $this->bd->prepare('SELECT * FROM usuario ORDER BY nome ASC');
            $getTodos->execute();
            return $getTodos->fetchAll(PDO::FETCH_ASSOC);
        }

        function buscar(){
            $get =  $this->bd->prepare('SELECT * FROM usuario WHERE id = :id ORDER BY nome ASC');
            $get->execute([
                ':id' => $this->id,
            ]);
            return $get->fetch(PDO::FETCH_ASSOC);
        }

        function editar(){
            $editar = $this->bd->prepare('UPDATE usuario SET nome = :nome, email = :email, senha = :senha, tipo = :tipo, cliente = :cliente WHERE id = :id');
            $editar->execute([
              ':id'   => $this->id,
              ':nome' => $this->nome,
              ':email' => $this->email,
              ':senha' => $this->senha,
              ':tipo' => $this->tipo,
              ':cliente' => $this->cliente,
            ]);
            return $editar->rowCount();
        }

        function deletar(){
            $deletar = $this->bd->prepare('DELETE FROM usuario where id = :id');
            $deletar->execute([
              ':id' => $this->id,
            ]);
            return $deletar->rowCount();
        }
    }
?>