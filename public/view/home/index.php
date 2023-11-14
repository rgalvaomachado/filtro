<?php
    include_once('controller/Filtro.php');
?>
<head>
    <link href="/public/view/home/style.css" rel="stylesheet">
    <script src="/public/view/home/script.js"></script>
</head>

<div id="top">
    <img src="/public/img/hubis-colorido.png" id="logo-hubis">
    <a id="logout"><i class="fa fa-sign-out" aria-hidden="true" onclick="logout()"></i></a>
</div>

<div id="filtros">
    <?php
        $Filtro = new FiltroController();
        $quadrado = $Filtro->buscarTipoCliente(['tipo' => '1', 'cliente' => $_SESSION['cliente']]);
        $q = json_decode($quadrado);
        if(count($q->filtros) > 0){ ?>
            <div class="subtitulo">
                <h2>Destaques</h2>
            </div>
            <div class="grid-container">
                <?php foreach ($q->filtros as $filtro){ ?>
                    <div class="grid-item">
                        <div class="quadrado">
                            <a href="filtro?tipo=1&filtro=<?php echo $filtro->uniqid?>"> <img src="<?php echo './filtro/'.$filtro->uniqid.'.png'?>"></a>
                        </div>
                    </div>
                <?php } ?> 
            </div>
        <?php } 
    ?>

    <?php
        $Filtro = new FiltroController();
        $quadrado = $Filtro->buscarTipoCliente(['tipo' => '2', 'cliente' => $_SESSION['cliente']]);
        $q = json_decode($quadrado);
        if(count($q->filtros) > 0){ ?>
            <div class="subtitulo">
                <h2>Quadrado</h2>
            </div>
            <div class="grid-container">
                <?php foreach ($q->filtros as $filtro){ ?>
                    <div class="grid-item">
                        <div class="quadrado">
                            <a href="filtro?tipo=2&filtro=<?php echo $filtro->uniqid?>"> <img src="<?php echo './filtro/'.$filtro->uniqid.'.png'?>"></a>
                        </div>
                    </div>
                <?php } ?> 
            </div>
        <?php } 
    ?>

    <?php
        $Filtro = new FiltroController();
        $quadrado = $Filtro->buscarTipoCliente(['tipo' => '3', 'cliente' => $_SESSION['cliente']]);
        $q = json_decode($quadrado);
        if(count($q->filtros) > 0){ ?>
            <div class="subtitulo">
                <h2>Vertical</h2>
            </div>
            <div class="grid-container">
                <?php foreach ($q->filtros as $filtro){ ?>
                    <div class="grid-item">
                        <div class="vertical">
                            <a href="filtro?tipo=3&filtro=<?php echo $filtro->uniqid?>"> <img src="<?php echo './filtro/'.$filtro->uniqid.'.png'?>"></a>
                        </div>
                    </div>
                <?php } ?> 
            </div>
        <?php } 
    ?>
</div>

<?php include_once('public/footer.php'); ?>