<?php
    include_once('controller/Filtro.php');
    include_once('controller/Cliente.php');
?>
<head>
    <link href="public/view/admin/filtro/style.css" rel="stylesheet">
    <script src="/public/view/admin/filtro/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <label class="title">Filtros</label> <a href="/admin/filtro/criar"><i class="title fa fa-plus-square-o" aria-hidden="true"></i></a>
		<br>
		<label class="message_alert" id="messageAlert"></label>
        <br>
		<?php
			$FiltroController = new FiltroController();
			$filtros = json_decode($FiltroController->buscarTodos([]))->filtros;
		?>
		<table class="list">
            <tbody>
                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Cliente
                    </th>
                    <th>
                        Tipo
                    </th>
                </tr>
                <?php foreach ($filtros as $filtro){ ?>
                    <tr>
                        <td class="text-left">
                            <?php echo $filtro->nome ?>
                        </td> 
                        <td class="text-left">
                            <?php
                                $ClienteController = new ClienteController();
                                $cliente = json_decode($ClienteController->buscar(['id' => $filtro->cliente]))->cliente;
                                echo $cliente->nome;
                            ?>
                        </td> 
                        <td>
                            <?php
                                switch($filtro->tipo){
                                    case '1':
                                        echo "Destaque";
                                        break;
                                    case '2':
                                        echo "Quadrado";
                                        break;
                                    case '3':
                                        echo "Vertical";
                                        break;
                                    default:
                                        echo 'Tipo não encontrado';
                                        break;
                                }
                            ?>
                        </td>
                        <!-- <td>
                            <a href="/admin/filtro/editar?id=<?php echo $filtro->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td> -->
                        <td>
                            <a href="/admin/filtro/deletar?id=<?php echo $filtro->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>