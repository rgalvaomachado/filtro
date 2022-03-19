<?php
    $_UP['folder'] = 'uploads/'; // folder onde o file vai ser salvo
    $_UP['size'] = 104857600; // 100Mb size máximo do file (em Bytes)

    $_UP['extension'] = ['jpg','png','gif','jpeg']; // Array com as extensões permitidas
    
    if ($_FILES['file']['type'] != ""){
        $file = explode("/",$_FILES['file']['type']);
        $extension = $file[1];
        if (!in_array($extension, $_UP['extension'])) { // Faz a verificação da extensão do file
            $sucess = false;
            $error = 1;
        }else if ($_UP['size'] < $_FILES['file']['size']) { // Faz a verificação do tamanho do file
            $sucess = false;
            $error = 2;
        }else {
            $img = uniqid().'.jpg'; // Renomeia o file
            $sucess = true;
        }
        if($sucess){
            if (move_uploaded_file($_FILES['file']['tmp_name'], $_UP['folder'] . $img)) {
                $sku = $_POST['sku'] != "" ? $_POST['sku'] : 0;
                $price = $_POST['price'] != "" ? $_POST['price'] : 0;
                $model = $_POST['model'] != "" ? $_POST['model'] : 1;
                header("location: preview.php?sku=".$sku."&price=".$price."&model=".$model."&img=".$img);
            }else {
                $error = 3;
            }
        }
    }else{
        $error = 4;
    }
    if($error > 0){
        header("location: error.php?error=".$error);
    }
?>