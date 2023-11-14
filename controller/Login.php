<?php
    include_once('Usuario.php');
    class LoginController{
        public function login($post){
            $email = $post['email'];
            $senha = $post['senha'];
            $validado = false;

            $UsuarioController = new UsuarioController();
            $UsuarioController = json_decode($UsuarioController->buscarTodos([]));
            $usuarios = $UsuarioController->usuarios;
            foreach($usuarios as $usuario){
                if($email == $usuario->email && $senha == $usuario->senha){
                    $idValidado = $usuario->id;
                    $usuarioValidado = $usuario->nome;
                    $modoValidado = $usuario->tipo == 1 ? 'admin' : "usuario";
                    $validado = true;
                }
            }

            if($validado){
                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id_usuario'] =  $idValidado;
                $_SESSION['usuario'] =  $usuarioValidado;
                $_SESSION['modo'] = $modoValidado;
                $_SESSION['CREATED'] = time();
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