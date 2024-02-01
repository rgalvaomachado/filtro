<?php
    include_once('src/model/Filtro.php');

    class FiltroController{
        function buscarTodos($post){
            $FiltroModel = new FiltroModel();
            $filtros = $FiltroModel->buscarTodos();
            return json_encode([
                "access" => true,
                "filtros" => $filtros
            ]);
        }

        function buscarTipoCliente($post){
            $FiltroModel = new FiltroModel();
            $FiltroModel->tipo = $post['tipo'];
            $FiltroModel->cliente = $post['cliente'];
            $filtros = $FiltroModel->buscarTipoCliente();
            return json_encode([
                "access" => true,
                "filtros" => $filtros
            ]);
        }

        function buscar($post){
            $FiltroModel = new FiltroModel();
            $FiltroModel->id = $post['id'];
            $filtro = $FiltroModel->buscar();
            if(!empty($filtro)){
                return json_encode([
                    "access" => true,
                    "filtro" => $filtro,
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
            $path = $_ENV['DIRECTORY_FILTROS'].$uniqid.'.png';

            $img = $post['filtro'];
            $img = str_replace('data:image/png;base64,', '', $img);
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);
            file_put_contents($path, $data);

            $FiltroModel = new FiltroModel();
            $FiltroModel->nome = $post['nome'];
            $FiltroModel->uniqid = $uniqid;
            $FiltroModel->tipo = $post['tipo'];
            $FiltroModel->cliente = $post['cliente'];
            $id = $FiltroModel->criar();
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

        // function editar($post){
        //     $FiltroModel = new FiltroModel();
        //     $FiltroModel->id = $post['id'];
        //     $FiltroModel->nome = $post['nome'];
        //     $id = $FiltroModel->editar();
        //     if ($id > 0) {
        //         return json_encode([
        //             "access" => true,
        //             "message" => "Editado com sucesso"
        //         ]);
        //     } else {
        //         return json_encode([
        //             "access" => false,
        //             "message" => "Erro na edição"
        //         ]);
        //     }
        // }

        function deletar($post){
            $FiltroModel = new FiltroModel();
            $FiltroModel->id = $post['id'];
            $deletado = $FiltroModel->deletar();
            if ($deletado){
                unlink($_ENV['DIRECTORY_FILTROS'].$post['uniqid'].'.png');
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