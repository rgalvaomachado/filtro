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

<div class="subtitulo">
    <h2>Destaques</h2>
</div>
<div class="grid-container">
    <div class="grid-item">
        <div class="quadrado">
            <img onclick="selecionarModelo(1,1)" src="/public/img/filtro_padrao.png">
        </div>
    </div>
    <div class="grid-item">
        <div class="quadrado">
            <img onclick="selecionarModelo(1,2)" src="/public/img/filtro_promocao.png">
        </div>
    </div>
</div>

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