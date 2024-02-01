<?php
    include_once('src/controller/Filtro.php');
?>
<head>
    <link href="/public/view/filtro/style.css" rel="stylesheet">
    <script src="/public/view/filtro/script.js"></script>
</head>

<div id="top">
    <img src="/public/img/hubis-colorido.png" id="logo-hubis">
    <a id="logout"><i class="fa fa-sign-out" aria-hidden="true" onclick="logout()"></i></a>
</div>

<div id="filtros">
    <?php
        $Filtro = new FiltroController();
        $post_quadrado = $Filtro->buscarTipoCliente(['tipo' => '2', 'cliente' => $_SESSION['cliente']]);
        $quadrado = json_decode($post_quadrado);

        $Filtro = new FiltroController();
        $post_vertical = $Filtro->buscarTipoCliente(['tipo' => '3', 'cliente' => $_SESSION['cliente']]);
        $vertical = json_decode($post_vertical);

        if(count($quadrado->filtros) > 0 || count($vertical->filtros)){ ?>
            <h2>Post</h2>
            <div id="post">    
                <?php if(count($quadrado->filtros) > 0){ ?>
                    <h4>Quadrado</h4>
                    <div class="grid-container">
                        <?php foreach ($quadrado->filtros as $filtro){ ?>
                            <div class="grid-item">
                                <div class="post_quadrado">
                                    <a href="filtro?tipo=2&filtro=<?php echo $filtro->uniqid?>"> <img src="<?php echo $_ENV['DIRECTORY_FILTROS'].$filtro->uniqid.'.png'?>"></a>
                                </div>
                            </div>
                        <?php } ?> 
                    </div>
                <?php } ?> 
                <?php if(count($vertical->filtros) > 0){ ?>
                    <h4>Vertical</h4>
                    <div class="grid-container">
                        <?php foreach ($vertical->filtros as $filtro){ ?>
                            <div class="grid-item">
                                <div class="post_vertical">
                                    <a href="filtro?tipo=3&filtro=<?php echo $filtro->uniqid?>"> <img src="<?php echo $_ENV['DIRECTORY_FILTROS'].$filtro->uniqid.'.png'?>"></a>
                                </div>
                            </div>
                        <?php } ?> 
                    </div> 
                <?php } ?> 
            </div>       
        <?php } 
    ?>

    <?php
        $Filtro = new FiltroController();
        $story = $Filtro->buscarTipoCliente(['tipo' => '1', 'cliente' => $_SESSION['cliente']]);
        $s = json_decode($story);
        if(count($s->filtros) > 0){ ?>
            <h2>Story</h2>
            <div id="story">
                <div class="grid-container">
                    <?php foreach ($s->filtros as $filtro){ ?>
                        <div class="grid-item">
                            <div class="story">
                                <a href="filtro?tipo=1&filtro=<?php echo $filtro->uniqid?>"> <img src="<?php echo $_ENV['DIRECTORY_FILTROS'].$filtro->uniqid.'.png'?>"></a>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
            </div>
        <?php } 
    ?>
</div>

<?php //include_once('public/footer.php'); ?>