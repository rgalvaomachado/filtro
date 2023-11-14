<?php 
    include_once('controller/Filtro.php');
    include_once('controller/Usuario.php');
    include_once('controller/Cliente.php');
    ?>
<head>
    <link href="public/view/admin/home/style.css" rel="stylesheet">
    <script src="/public/view/admin/home/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <div class="grid-container-graficos">
            <?php
                $UsuarioController = new UsuarioController();
                $usuarios = json_decode($UsuarioController->buscarTodos([]))->usuarios;
                $qtdUsuarios = count($usuarios);

                $ClienteController = new ClienteController();
                $clientes = json_decode($ClienteController->buscarTodos([]))->clientes;
                $qtdclientes = count($clientes);

                $FiltroController = new FiltroController();
                $filtros = json_decode($FiltroController->buscarTodos([]))->filtros;
                $qtdfiltros = count($filtros);

            ?>
            <div class="grid-item-graficos">
                <label class="title">Filtros</label>
                <br>
                <label style="font-size: 50px;"><?php echo $qtdfiltros ?></label>
            </div>
            <div class="grid-item-graficos">
                <label class="title">Usuarios</label>
                <br>
                <label style="font-size: 50px;"><?php echo $qtdUsuarios ?></label>
            </div>
            <div class="grid-item-graficos">
                <label class="title">Clientes</label>
                <br>
                <label style="font-size: 50px;"><?php echo $qtdclientes ?></label>
            </div>
            <div class="grid-item-graficos">
                <div id="graficos">
                <canvas id="usuarios"></canvas>
            </div>
        </div>
    </div>
</div>