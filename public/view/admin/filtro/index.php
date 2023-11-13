<head>
	<?php include_once('controller/Filtro.php')?>
    <link href="/public/view/admin/style.css" rel="stylesheet">
    <script src="/public/view/admin/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <label class="title">Filtro</label> <a href="/admin/filtro/criar"><i class="title fa fa-plus-square-o" aria-hidden="true"></i></a>
		<br>
		<label class="message_alert" id="messageAlert"></label>
        <br>
		<?php
			$FiltroController = new FiltroController();
			$usuarios = json_decode($FiltroController->buscarTodos(['grupo' => '2']))->usuarios;
		?>
		<table class="list">
            <tbody>
                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Telefone
                    </th>
                    <th>
                        Data de Nascimento
                    </th>
                    <th>
                        Editar
                    </th>
                    <th>
                        Deletar
                    </th>
                </tr>
                <?php foreach ($usuarios as $usuario){ ?>
                    <tr>
                        <td class="text-left">
                            <?php echo $usuario->nome ?>
                        </td> 
                        <td>
                            <?php echo $usuario->telefone ?>
                        </td> 
                        <td>
                            <?php echo $usuario->data_nascimento ?>
                        </td> 
                        <td>
                            <a href="/professor/editar?id=<?php echo $usuario->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <a href="/professor/deletar?id=<?php echo $usuario->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>