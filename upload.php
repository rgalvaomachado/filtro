<?php
    $_UP['pasta'] = 'uploads/'; // Pasta onde o arquivo vai ser salvo
    $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb Tamanho máximo do arquivo (em Bytes)
    $_UP['extensoes'] = array('jpg', 'png', 'gif'); // Array com as extensões permitidas
    $_UP['erros'][0] = 'Não houve erro'; // Array com os tipos de erros de upload do PHP
    $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP'; // Array com os tipos de erros de upload do PHP
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML'; // Array com os tipos de erros de upload do PHP
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente'; // Array com os tipos de erros de upload do PHP
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo'; // Array com os tipos de erros de upload do PHP
    
    if ($_FILES['arquivo']['error'] != 0) { // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
        die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
        exit; // Para a execução do script
    }

    $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
    if (array_search($extensao, $_UP['extensoes']) === false) { // Faz a verificação da extensão do arquivo
        echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
    }else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) { // Faz a verificação do tamanho do arquivo
        echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
    }else {
        $nome_final = 'fundo.jpg'; // Renomeia o arquivo
    }
    
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        // echo "Upload efetuado com sucesso!";
        ?>
        <script>
            setTimeout(function () {
                window.location.href= 'index.php';
            },1);
        </script>
        <?php
    } else {
        echo "Não foi possível enviar o arquivo, tente novamente";
    }
?>