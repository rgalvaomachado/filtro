
<?php 
    if (!isset($_GET['id'])){
        header("Location: /admin/cliente");
        die();
    }
	include_once('src/controller/Cliente.php')
?>
<head>
    <link href="public/view/admin/cliente/style.css" rel="stylesheet">
    <script src="/public/view/admin/cliente/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <label class="title">Deletar Cliente</label>
		<br>
		<label class="message_alert" id="messageAlert"></label>
		<br>
		<?php 
			$ClienteController = new ClienteController();
			$ClienteController = json_decode($ClienteController->buscar(['id' => $_GET['id']]));
			$cliente = $ClienteController->cliente;
		?>
		<form id="deletar">
			<input type="hidden" id="cliente" name="cliente" value="<?php echo $cliente->id?>">
			<label>Nome</label>
			</br>
			<label><b><?php echo $cliente->nome?></b></label>
			</br>
			<br>
			<input class='button deletar' type="submit" value="Deletar">
		</form>
    </div>
</div>