<?php
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : 1;
    
    switch($modelo){
        case 1:
            header("location: modelos/padrao.php?&modelo=".$modelo);
            break;

        case 2:
            header("location: modelos/padrao.php?&modelo=".$modelo);
            break;

        case 3:
            header("location: modelos/categorias.php?&modelo=".$modelo);
            break;

        case 4:
            header("location: modelos/categorias.php?&modelo=".$modelo);
            break;

        case 5:
            header("location: modelos/categorias.php?&modelo=".$modelo);
            break;

        case 6:
            header("location: modelos/categorias.php?&modelo=".$modelo);
            break;

        case 7:
            header("location: modelos/categorias.php?&modelo=".$modelo);
            break;

        case 8:
            header("location: modelos/storys.php?&modelo=".$modelo);
            break;
    }

?>