<?php
    include_once('Usuario.php');
    class LoginController{
        public function login($post){
            $login = $post['login'];
            $senha = $post['senha'];
            $validado = false;

            $UsuarioController = new UsuarioController();
            $UsuarioController = json_decode($UsuarioController->buscarTodos([]));
            $usuarios = $UsuarioController->usuarios;
            foreach($usuarios as $usuario){
                if($login == $usuario->login && $senha == $usuario->senha){
                    $idValidado = $usuario->id;
                    $usuarioValidado = $usuario->nome;
                    $clienteValidado = $usuario->cliente;
                    $modoValidado = $usuario->tipo == 1 ? 'admin' : "usuario";
                    $validado = true;
                }
            }

            if($validado){
                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id_usuario'] = $idValidado;
                $_SESSION['usuario']    = $usuarioValidado;
                $_SESSION['cliente']    = $clienteValidado;
                $_SESSION['modo']       = $modoValidado;
                $_SESSION['CREATED']    = time();
                return json_encode([
                    "access" => true,
                    "modo" => $modoValidado,
                ]);
            }else{
                return json_encode([
                    "access" => false,
                    "message" => "Desculpe, usuário ou senha incorreta.",
                ]);
            }
        }

        public function logout(){
            $_SESSION['modo'] = "";
            return json_encode([
                "access" => true,
                "message" => "Logout efetuado com sucesso",
            ]);
        }
    }
?>