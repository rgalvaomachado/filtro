<head>
    <link href="/public/view/admin/style.css" rel="stylesheet">
    <script src="/public/view/admin/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <h1>Criar Usuario</h1>
        <form id="criar">
            <label>Nome</label>
            <br>
            <input id="nome">
            <br>
            <br>

            <label>Path</label>
            <br>
            <input id="filtro" type="file">
            <br>
            <br>
            <label>Tipo</label>
            <br>
            <select id="tipo">
                <option value="1">Destaque</option>
                <option value="2">Quadrado</option>
                <option value="3">Vertical</option>
            </select>
            <br>
            <br>
            <button type="submit">Criar</button>
        </form>
    </div>
</div>