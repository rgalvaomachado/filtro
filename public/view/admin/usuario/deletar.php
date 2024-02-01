
<?php 
    if (!isset($_GET['id'])){
        header("Location: /admin/usuario");
        die();
    }
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
        <label class="title">Deletar Usuario</label>
		<br>
		<label class="message_alert" id="messageAlert"></label>
		<br>
		<?php 
			$UsuarioController = new UsuarioController();
			$UsuarioController = json_decode($UsuarioController->buscar(['id' => $_GET['id']]));
			$usuario = $UsuarioController->usuario;
		?>
		<form id="deletar">
			<input type="hidden" id="usuario" name="usuario" value="<?php echo $usuario->id?>">
			<label>Nome</label>
			</br>
			<label><b><?php echo $usuario->nome?></b></label>
			</br>
			<br>
			<input class='button deletar' type="submit" value="Deletar">
		</form>
    </div>
</div>