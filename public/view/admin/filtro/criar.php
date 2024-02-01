<?php
	include_once('src/controller/Cliente.php')
?>
<head>
    <link href="public/view/admin/filtro/style.css" rel="stylesheet">
    <script src="/public/view/admin/filtro/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <h1>Criar Filtro</h1>
        <form id="criar">
        <label>Nome</label>
            <br>
            <input class="input" id="nome">
            <br>
            <br>
            <label>Filtro</label>
            <br>
            <input class="input" id="filtro" type="file">
            <br>
            <br>
            <label>Tipo</label>
            <br>
            <select class="input" id="tipo">
                <option value="1">Story</option>
                <option value="2">Post Quadrado</option>
                <option value="3">Post Vertical</option>
            </select>
            <br>
            <label>Cliente</label>
            <br>
            <?php
                $ClienteController = new ClienteController();
                $clientes = json_decode($ClienteController->buscarTodos([]))->clientes;
            ?>
            <select class="input" id="cliente">
                <?php foreach ($clientes as $cliente){ ?>
                    <option value="<?php echo $cliente->id ?>"><?php echo $cliente->nome ?></option>
                <?php } ?>
            </select>
            <br>
            <button class="button" type="submit">Criar</button>
        </form>
    </div>
</div>