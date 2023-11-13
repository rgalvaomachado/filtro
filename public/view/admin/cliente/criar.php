<head>
    <link href="public/view/admin/cliente/style.css" rel="stylesheet">
    <script src="/public/view/admin/cliente/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <h1>Criar Cliente</h1>
        <form id="criar">
            <label>Nome</label>
            <br>
            <label class="message_alert" id="messageAlert"></label>
            <br>
            <br>
            <input class="input" id="nome">
            <br>
            <br>
            <button class="button" type="submit">Criar</button>
        </form>
    </div>
</div>