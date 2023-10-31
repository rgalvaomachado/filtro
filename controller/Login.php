<?php
    class Login{
        public function login(){
            if(!$_SESSION){
                session_start();
            }
            $_SESSION['modo'] = 'user';
            return json_encode([
                "access" => true,
                "message" => "Login efetuado com sucesso",
            ]);
        }
    }
?>