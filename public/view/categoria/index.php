<head>
    <link href="/public/view/categoria/style.css" rel="stylesheet">
    <script src="/public/view/categoria/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<?php
    $id = $_GET['id'];
    $tipo = $_GET['tipo'];
    switch($tipo){
        case 1:
            include_once('destaque.php');
        break;

        case 2:
            include_once('quadrado.php');
        break;

        case 3:
            include_once('vertical.php');
        break;

        default :
            echo "Tipo não encontrado";
        break;
    }
?>