<?php
    include_once('Login.php');
    include_once('Filtro.php');
    include_once('Imagem.php');

    $metodo = isset($_POST['metodo']) ? $_POST['metodo'] : "";

    switch($metodo){
        case 'login':
            $class = new Login();
            $response = $class->login($_POST);
            break;
        case 'logout':
            $class = new Login();
            $response = $class->logout($_POST);
            break;
        case 'criarFiltro':
            $class = new FiltroController();
            $response = $class->criar($_POST);
            break;
        case 'criarImagem':
            $class = new Imagem();
            $response = $class->criar($_POST);
            break;
        default:
            $response = json_encode([
                "access" => false,
                "message" => "Método não encontrado"
            ]);
    }
    echo $response;
?>