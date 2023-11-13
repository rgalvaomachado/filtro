<?php
    $routesAPI = [
        // [METODO, PATH, CONTROLLER, FUNCTION],
    ];

    $routesView = [
        // [PATH, VIEW],
        ['login','public/view/login/index.php'],
        ['home','public/view/home/index.php'],
        ['filtro','public/view/filtro/index.php'],
        ['download','public/view/filtro/download.php'],

        ['admin/home','public/view/admin/home/index.php'],

        ['admin/filtro','public/view/admin/filtro/index.php'],
        ['admin/filtro/criar','public/view/admin/filtro/criar.php'],

        ['admin/usuario','public/view/admin/usuario/index.php'],

        ['admin/cliente','public/view/admin/cliente/index.php'],
        ['admin/cliente/criar','public/view/admin/cliente/criar.php'],
        ['admin/cliente/editar','public/view/admin/cliente/editar.php'],
        ['admin/cliente/deletar','public/view/admin/cliente/deletar.php'],
    ];
?>