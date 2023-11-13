<?php
	include_once('controller/Cliente.php')
?>
<head>
    <link href="public/view/admin/usuario/style.css" rel="stylesheet">
    <script src="/public/view/admin/usuario/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <h1>Criar Usuario</h1>
        <form id="criar">
            <label class="message_alert" id="messageAlert"></label>
            <br>
            <label>Nome</label>
            <br>
            <br>
            <input class="input" id="nome">
            <br>
            <label>Email</label>
            <br>
            <br>
            <input class="input" type="email" id="email">
            <br>
            <label>Senha</label>
            <br>
            <br>
            <input class="input" type="password" id="senha">
            <br>
            <label>Tipo</label>
            <br>
            <select class="input" id="tipo">
                <option value="1">Admin</option>
                <option value="2">Usuario</option>
            </select>
            <br>
            <div id="clientes" style="display: none;">
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
            </div>
            <br>
            <button class="button" type="submit">Criar</button>
        </form>
    </div>
</div>