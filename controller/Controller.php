<?php
    include_once('Login.php');

    $metodo = isset($_POST['metodo']) ? $_POST['metodo'] : "";

    switch($metodo){
        case 'login':
            $class = new Login();
            $response = $class->login($_POST);
            break;
        default:
            $response = json_encode([
                "access" => false,
                "message" => "Método não encontrado"
            ]);
    }
    echo $response;
?>