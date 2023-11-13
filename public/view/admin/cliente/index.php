<?php
    include_once('controller/Cliente.php')
?>
<head>
    <link href="public/view/admin/cliente/style.css" rel="stylesheet">
    <script src="/public/view/admin/cliente/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <label class="title">Clientes</label> <a href="/admin/cliente/criar"><i class="title fa fa-plus-square-o" aria-hidden="true"></i></a>
		<br>
		<label class="message_alert" id="messageAlert"></label>
        <br>
		<?php
			$ClienteController = new ClienteController();
			$clientes = json_decode($ClienteController->buscarTodos([]))->clientes;
		?>
		<table class="list">
            <tbody>
                <tr>
                    <th>
                        Nome
                    </th>
                </tr>
                <?php foreach ($clientes as $cliente){ ?>
                    <tr>
                        <td class="text-left">
                            <?php echo $cliente->nome ?>
                        </td> 
                        <td>
                            <a href="/admin/cliente/editar?id=<?php echo $cliente->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <a href="/admin/cliente/deletar?id=<?php echo $cliente->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>