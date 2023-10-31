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

<div class="subtitulo">
    <h2>Quadrado</h2>
</div>
<div class="grid-container">
    <div class="grid-item">
        <div class="quadrado">
            <img onclick="selecionarModelo(2,1)" src="/public/img/filtro_esportista.png">
        </div>
    </div>
    <div class="grid-item">
        <div class="quadrado">
            <img onclick="selecionarModelo(2,2)" src="/public/img/filtro_fitness.png">
        </div>
    </div>
    <div class="grid-item">
        <div class="quadrado">
            <img onclick="selecionarModelo(2,3)" src="/public/img/filtro_funcional.png">
        </div>
    </div>
    <div class="grid-item">
        <div class="quadrado">
            <img onclick="selecionarModelo(2,4)" src="/public/img/filtro_futebol.png">
        </div>
    </div>
    <div class="grid-item">
        <div class="quadrado">
            <img onclick="selecionarModelo(2,5)" src="/public/img/filtro_lazer.png">
        </div>
    </div>
</div>

<div class="subtitulo">
    <h2>Vertical</h2>
</div>
<div class="grid-container">
    <div class="grid-item">
        <div class="vertical">
            <img onclick="selecionarModelo(3,1)" src="/public/img/vertical.png">
        </div>
</div>
