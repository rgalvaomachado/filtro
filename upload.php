<?php
    $_UP['folder'] = 'uploads/'; // folder onde o file vai ser salvo
    $_UP['size'] = 51200; // 50Mb size máximo do file (em Bytes)
    $_UP['extension'] = ['jpg','png','gif','jpeg']; // Array com as extensões permitidas
    
    $redirect = "<br><a href='index.php'>Voltar</a>";
    if ($_FILES['file']['type'] != ""){
        $file = explode("/",$_FILES['file']['type']);
        $extension = $file[1];
        if (!in_array($extension, $_UP['extension'])) { // Faz a verificação da extensão do file
            $sucess = false;
            $message = "Por favor, envie files com as seguintes extensões: jpg, png ou gif.";
        }else if ($_UP['size'] < $_FILES['file']['size']) { // Faz a verificação do tamanho do file
            $sucess = false;
            $message = "O file enviado é muito grande, envie files de até 20Mb.";
        }else {
            $nome_final = 'fundo.jpg'; // Renomeia o file
            $sucess = true;
        }
        if($sucess){
            if (move_uploaded_file($_FILES['file']['tmp_name'], $_UP['folder'] . $nome_final)) {
                $sku = $_POST['sku'] != "" ? $_POST['sku'] : 0;
                $price = $_POST['price'] != "" ? $_POST['price'] : 0;
                $model = $_POST['model'] != "" ? $_POST['model'] : 1;
                header("location: preview.php?sku=".$sku."&price=".$price."&model=".$model);
            }else {
                echo "Não foi possível enviar o file, tente novamente";
                echo $redirect;
            }
        } else {
            echo $message;
            echo $redirect;
        }
    }else{
        echo "Nenhum arquivo foi selecionado";
        echo $redirect;
    }
?>