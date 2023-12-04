<?php
    $routesAPI = [
        // [METODO, PATH, CONTROLLER, FUNCTION],
    ];

    $routesView = [
        // [PATH, VIEW],
        ['login','public/view/login/index.php'],
        ['home','public/view/home/index.php'],
        ['filtro','public/view/filtro/index.php'],

        ['admin/home','public/view/admin/home/index.php'],

        ['admin/filtro','public/view/admin/filtro/index.php'],
        ['admin/filtro/criar','public/view/admin/filtro/criar.php'],
        // ['admin/filtro/editar','public/view/admin/filtro/editar.php'],
        ['admin/filtro/deletar','public/view/admin/filtro/deletar.php'],

        ['admin/usuario','public/view/admin/usuario/index.php'],
        ['admin/usuario/criar','public/view/admin/usuario/criar.php'],
        ['admin/usuario/editar','public/view/admin/usuario/editar.php'],
        ['admin/usuario/deletar','public/view/admin/usuario/deletar.php'],

        ['admin/cliente','public/view/admin/cliente/index.php'],
        ['admin/cliente/criar','public/view/admin/cliente/criar.php'],
        ['admin/cliente/editar','public/view/admin/cliente/editar.php'],
        ['admin/cliente/deletar','public/view/admin/cliente/deletar.php'],
    ];
?>