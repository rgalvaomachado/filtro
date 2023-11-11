<?php
    include_once('controller/Filtro.php');
?>
<head>
    <link href="/public/view/home/style.css" rel="stylesheet">
    <script src="/public/view/home/script.js"></script>
</head>

<div class="container cabecalho">
    <div>
        <img src="img/claus.png">
    </div>
    <div>
        <h1>CRIADOR DE IMAGENS</h1>
    </div>
    <form id="logout">
        <button type="submit">Sair</button>
    </form>
</div>

<?php
    $Filtro = new FiltroController();
    $quadrado = $Filtro->buscarTodos(['tipo' => '1']);
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
    $quadrado = $Filtro->buscarTodos(['tipo' => '2']);
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
    $quadrado = $Filtro->buscarTodos(['tipo' => '3']);
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