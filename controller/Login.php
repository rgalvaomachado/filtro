<?php
    class Login{
        public function login($post){
            if(!$_SESSION){
                session_start();
            }
            $_SESSION['modo'] = $post['email'];
            return json_encode([
                "access" => true,
                "message" => "Login efetuado com sucesso",
            ]);
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