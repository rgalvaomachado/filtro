<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="img/logo-page.png" />
    <title>Claus Sport - Sistema de Criação de Post</title>
</head>
<body>
    <div class="container cabecalho">
        <div>
            <img src="img/claus.png">
        </div>
        <div>
            <h1>CRIADOR DE IMAGENS</h1>
        </div>
    </div>
    <form id='upload' method="post" action="valida_modelo.php" enctype="multipart/form-data">
        <input type="hidden" id="modelo" name="modelo">
        <div class="container modelos">
            <div class="container subtitulo">
                <h2>PADRÃO E PROMOÇÃO</h2>
            </div>
            <div class="row align-items-start">
                <div class="col col-6 col-sm-4">
                    <img onclick="selecionarModelo(1)" src="img/filtro_padrao.png">
                </div>
                <div class="col col-6 col-sm-4">
                    <img onclick="selecionarModelo(2)" src="img/filtro_promocao.png">
                </div>
            </div>
            <div class="container subtitulo">
                <h2>CATEGORIAS</h2>
            </div>
            <div class="row align-items-start">
                <div class="col col-6 col-sm-4">
                    <img onclick="selecionarModelo(3)" src="img/filtro_esportista.png">
                </div>
                <div class="col col-6 col-sm-4">
                    <img onclick="selecionarModelo(4)" src="img/filtro_fitness.png">
                </div>
                <div class="col col-6 col-sm-4">
                    <img onclick="selecionarModelo(5)" src="img/filtro_funcional.png">
                </div>
                <div class="col col-6 col-sm-4">
                    <img onclick="selecionarModelo(6)" src="img/filtro_futebol.png">
                </div>
                <div class="col col-6 col-sm-4">
                    <img onclick="selecionarModelo(7)" src="img/filtro_lazer.png">
                </div>
            </div>
            <div class="container subtitulo">
                <h2>STORYS</h2>
            </div>
            <div class="row align-items-start">
                <div class="col col-6 col-sm-4">
                    <img onclick="selecionarModelo(8)" src="img/filtro_story.png">
                </div>
            </div>
        </div>
    </form>
    <div class="footer">
        <img src="img/hubis.png">
    </div>

    <script src="libs/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script>
    var form = document.getElementById("upload");
    function selecionarModelo(modelo){
        document.getElementById('modelo').value = modelo;
        form.submit(); 
    }
</script>