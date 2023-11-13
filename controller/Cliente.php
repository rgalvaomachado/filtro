<?php
    include_once('model/Cliente.php');

    class ClienteController{
        function buscarTodos($post){
            $ClienteModel = new ClienteModel();
            $clientes = $ClienteModel->buscarTodos();
            return json_encode([
                "access" => true,
                "clientes" => $clientes
            ]);
        }

        function buscar($post){
            $ClienteModel = new ClienteModel();
            $ClienteModel->id = $post['id'];
            $cliente = $ClienteModel->buscar();
            if(!empty($cliente)){
                return json_encode([
                    "access" => true,
                    "cliente" => $cliente,
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Cliente não encontrado"
                ]);
            }
        }

        function criar($post){
            $ClienteModel = new ClienteModel();
            $ClienteModel->nome = $post['nome'];
            $id = $ClienteModel->criar();
            if ($id > 0){
                return json_encode([
                    "access" => true,
                    "message" => "Criado com sucesso"
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Erro no cadastro"
                ]);
            }
            
        }

        function editar($post){
            $ClienteModel = new ClienteModel();
            $ClienteModel->id = $post['id'];
            $ClienteModel->nome = $post['nome'];
            $id = $ClienteModel->editar();
            if ($id > 0) {
                return json_encode([
                    "access" => true,
                    "message" => "Editado com sucesso"
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Erro na edição"
                ]);
            }
        }

        function deletar($post){
            $ClienteModel = new ClienteModel();
            $ClienteModel->id = $post['id'];
            $deletado = $ClienteModel->deletar();
            if ($deletado){
                return json_encode([
                    "access" => true,
                    "message" => "Deletado com sucesso"
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Erro na exclusão"
                ]);
            }  
        }
    }
?>