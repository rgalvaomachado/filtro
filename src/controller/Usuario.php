<?php
    include_once('src/model/Usuario.php');

    class UsuarioController{
        function buscarTodos($post){
            $UsuarioModel = new UsuarioModel();
            $usuarios = $UsuarioModel->buscarTodos();
            return json_encode([
                "access" => true,
                "usuarios" => $usuarios
            ]);
        }

        function buscar($post){
            $UsuarioModel = new UsuarioModel();
            $UsuarioModel->id = $post['id'];
            $usuario = $UsuarioModel->buscar();
            if(!empty($usuario)){
                return json_encode([
                    "access" => true,
                    "usuario" => $usuario,
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Usuario não encontrado"
                ]);
            }
        }

        function criar($post){
            $UsuarioModel = new UsuarioModel();
            $UsuarioModel->nome = $post['nome'];
            $UsuarioModel->login = $post['login'];
            $UsuarioModel->senha = base64_encode($post['senha']);
            $UsuarioModel->tipo = $post['tipo'];
            $UsuarioModel->cliente = $post['cliente'] != '' ? $post['cliente'] : 0;

            $id = $UsuarioModel->criar();
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
            $UsuarioModel = new UsuarioModel();
            $UsuarioModel->id = $post['id'];
            $UsuarioModel->nome = $post['nome'];
            $UsuarioModel->login = $post['login'];
            $UsuarioModel->senha = base64_encode($post['senha']);
            $UsuarioModel->tipo = $post['tipo'];
            $UsuarioModel->cliente = $post['cliente'] != '' ? $post['cliente'] : 0;
            $id = $UsuarioModel->editar();
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
            $UsuarioModel = new UsuarioModel();
            $UsuarioModel->id = $post['id'];
            $deletado = $UsuarioModel->deletar();
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