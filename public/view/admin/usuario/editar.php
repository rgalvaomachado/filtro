<?php 
    if (!isset($_GET['id'])){
        header("Location: /admin/usuario");
        die();
    }
	include_once('controller/Usuario.php');
	include_once('controller/Cliente.php');
?>
<head>
    <link href="public/view/admin/usuario/style.css" rel="stylesheet">
    <script src="/public/view/admin/usuario/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <label class="title">Editar Usuario</label>
		<br>
		<label class="message_alert" id="messageAlert"></label>
		<br>
		<?php 
			$UsuarioController = new UsuarioController();
			$UsuarioController = json_decode($UsuarioController->buscar(['id' => $_GET['id']]));
			$usuario = $UsuarioController->usuario;
		?>
		<form id="editar">
			<input type="hidden" id="usuario" name="usuario" value="<?php echo $usuario->id?>">
			<label>Nome</label>
			</br>
			<input class='input' name="nome" id="nome" value="<?php echo $usuario->nome?>">
			</br>
			<label>Login</label>
			</br>
			<input class='input' name="login" id="login" value="<?php echo $usuario->login?>">
			</br>
			<label>Senha</label>
			</br>
			<input class='input' type="password" tyname="senha" id="senha" value="<?php echo $usuario->senha?>">
			</br>
			<label>Tipo</label>
            <br>
            <select class="input" id="tipo">
                <option value="1" <?php echo ($usuario->tipo == 1 ? "selected" : "")?>>Admin</option>
				<option value="2" <?php echo ($usuario->tipo == 2 ? "selected" : "")?>>Usuario</option>
            </select>
            <br>
			<div id="clientes">
				<label>Cliente</label>
				<br>
				<?php
					$ClienteController = new ClienteController();
					$clientes = json_decode($ClienteController->buscarTodos([]))->clientes;
				?>
				<select class="input" id="cliente">
					<?php foreach ($clientes as $cliente){ ?>
						<option value="<?php echo $cliente->id ?>" <?php echo ($usuario->cliente == $cliente->id ? "selected" : "")?>><?php echo $cliente->nome ?></option>
					<?php } ?>
				</select>
			</div>
			</br>
			<input class='button editar' type="submit" value="Editar">
		</form>
    </div>
</div>