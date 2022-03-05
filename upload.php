<?php
    $_UP['folder'] = 'uploads/'; // folder onde o file vai ser salvo
    $_UP['size'] = 1024 * 1024 * 2; // 2Mb size máximo do file (em Bytes)
    $_UP['extension'] = ['jpg', 'png', 'gif']; // Array com as extensões permitidas
    
    if ($_FILES['file']['type'] != ""){
        $file = explode("/",$_FILES['file']['type']);
        $extension = $file[1];
        if (!in_array($extension, $_UP['extension'])) { // Faz a verificação da extensão do file
            echo "Por favor, envie files com as seguintes extensões: jpg, png ou gif";
        }else if ($_UP['size'] < $_FILES['file']['size']) { // Faz a verificação do size do file
            echo "O file enviado é muito grande, envie files de até 2Mb.";
        }else {
            $nome_final = 'fundo.jpg'; // Renomeia o file
        }
        if (move_uploaded_file($_FILES['file']['tmp_name'], $_UP['folder'] . $nome_final)) {
            $sku = $_POST['sku'] != "" ? $_POST['sku'] : 0;
            $price = $_POST['price'] != "" ? $_POST['price'] : 0;
            $model = $_POST['model'] != "" ? $_POST['model'] : 1;
            header("location: preview.php?sku=".$sku."&price=".$price."&model=".$model);
        } else {
            echo "Não foi possível enviar o file, tente novamente";
        }
    }else{
        echo "Nenhum arquivo foi selecionado";
        echo "<br><a href='index.php'>Voltar</a>";
    }
?>