<?php
    include_once('model/Filtro.php');

    class FiltroController{
        function buscarTodos($post){
            $Filtro = new Filtro();
            $Filtro->tipo = $post['tipo'];
            $filtros = $Filtro->buscarTodos();
            return json_encode([
                "access" => true,
                "filtros" => $filtros
            ]);
        }

        function buscar($post){
            $Filtro = new Filtro();
            $Filtro->tipo = $post['tipo'];
            $filtros = $Filtro->buscar();
            if(!empty($filtros)){
                return json_encode([
                    "access" => true,
                    "filtros" => $filtros,
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Filtro não encontrado"
                ]);
            }
        }

        function criar($post){

            $uniqid = uniqid();
            $path = 'public/filtro/'.$uniqid.'.png';

            $img = $post['filtro'];
            $img = str_replace('data:image/png;base64,', '', $img);
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);
            file_put_contents($path, $data);

            $Filtro = new Filtro();
            $Filtro->nome = $post['nome'];
            $Filtro->uniqid = $uniqid;
            $Filtro->tipo = $post['tipo'];
            $id = $Filtro->criar();
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
            $Filtro = new Filtro();
            $Filtro->id = $post['id'];
            $Filtro->nome = $post['nome'];
            $id = $Filtro->editar();
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
            $Filtro = new Filtro();
            $Filtro->id = $post['id'];
            $deletado = $Filtro->deletar();
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