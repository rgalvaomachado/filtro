<?php
    include_once('model/Categoria.php');

    class CategoriaController{
        function buscarTodos($post){
            $Categoria = new Categoria();
            $Categoria->tipo = $post['tipo'];
            $categorias = $Categoria->buscarTodos();
            return json_encode([
                "access" => true,
                "categorias" => $categorias
            ]);
        }

        function buscar($post){
            $Categoria = new Categoria();
            $Categoria->tipo = $post['tipo'];
            $categorias = $Categoria->buscar();
            if(!empty($categorias)){
                return json_encode([
                    "access" => true,
                    "categorias" => $categorias,
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Categoria não encontrado"
                ]);
            }
        }

        function criar($post){

            $uniqid = uniqid();
            $path = 'public/categoria/'.$uniqid.'.png';

            $img = $post['filtro']; // Your data 'data:image/png;base64,AAAFBfj42Pj4';
            $img = str_replace('data:image/png;base64,', '', $img);
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);
            file_put_contents($path, $data);

            $Categoria = new Categoria();
            $Categoria->nome = $post['nome'];
            $Categoria->path = $path;
            $Categoria->uniqid = $uniqid;
            $Categoria->tipo = $post['tipo'];
            $id = $Categoria->criar();
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
            $Categoria = new Categoria();
            $Categoria->id = $post['id'];
            $Categoria->nome = $post['nome'];
            $id = $Categoria->editar();
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
            $Categoria = new Categoria();
            $Categoria->id = $post['id'];
            $deletado = $Categoria->deletar();
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