<?php
    include_once('src/controller/Usuario.php')
?>
<head>
    <link href="public/view/admin/usuario/style.css" rel="stylesheet">
    <script src="/public/view/admin/usuario/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <label class="title">Usuarios</label> <a href="/admin/usuario/criar"><i class="title fa fa-plus-square-o" aria-hidden="true"></i></a>
		<br>
		<label class="message_alert" id="messageAlert"></label>
        <br>
		<?php
			$UsuarioController = new UsuarioController();
			$usuarios = json_decode($UsuarioController->buscarTodos([]))->usuarios;
		?>
		<table class="list">
            <tbody>
                <tr>
                    <th>
                        Nome
                    </th>
                </tr>
                <?php foreach ($usuarios as $usuario){ ?>
                    <tr>
                        <td class="text-left">
                            <?php echo $usuario->nome ?>
                        </td> 
                        <td>
                            <a href="/admin/usuario/editar?id=<?php echo $usuario->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <a href="/admin/usuario/deletar?id=<?php echo $usuario->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>