<?php
    include_once('Login.php');
    include_once('Filtro.php');
    include_once('Imagem.php');
    include_once('Cliente.php');
    include_once('Usuario.php');

    $metodo = isset($_POST['metodo']) ? $_POST['metodo'] : "";

    switch($metodo){
        case 'login':
            $class = new LoginController();
            $response = $class->login($_POST);
            break;
        case 'logout':
            $class = new LoginController();
            $response = $class->logout($_POST);
            break;
        ////////////////////////////////////////////////////////////////////////////////////////////////////////
        case 'criarImagem':
            $class = new Imagem();
            $response = $class->criar($_POST);
            break;
        case 'deletarImagem':
            $class = new Imagem();
            $response = $class->deletar($_POST);
            break;
        ////////////////////////////////////////////////////////////////////////////////////////////////////////
        case 'criarFiltro':
            $class = new FiltroController();
            $response = $class->criar($_POST);
            break;
        case 'deletarFiltro':
            $class = new FiltroController();
            $response = $class->deletar($_POST);
            break;
        ////////////////////////////////////////////////////////////////////////////////////////////////////////

        case 'criarCliente':
            $class = new ClienteController();
            $response = $class->criar($_POST);
            break;
        case 'editarCliente':
            $class = new ClienteController();
            $response = $class->editar($_POST);
            break;
        case 'deletarCliente':
            $class = new ClienteController();
            $response = $class->deletar($_POST);
            break;
        ////////////////////////////////////////////////////////////////////////////////////////////////////////
        case 'criarUsuario':
            $class = new UsuarioController();
            $response = $class->criar($_POST);
            break;
        case 'editarUsuario':
            $class = new UsuarioController();
            $response = $class->editar($_POST);
            break;
        case 'deletarUsuario':
            $class = new UsuarioController();
            $response = $class->deletar($_POST);
            break;
        default:
            $response = json_encode([
                "access" => false,
                "message" => "Método não encontrado"
            ]);
    }
    echo $response;
?>