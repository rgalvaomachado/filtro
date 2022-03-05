<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="finish.css">
    <title>Claus Sport</title>
</head>
<body>
    <center>
        <h1>Mensagem de parabéns e obrigado</h1>
        <button id="btn_new" type="submit" class="btn btn-sm btn-success input">Criar nova Imagem</button>
    </center>
</body>
</html>
<script>
    document.getElementById("btn_new").addEventListener("click", function() {
        window.location.href = 'index.php';
    });
</script>