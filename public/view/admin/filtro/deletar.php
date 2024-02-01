
<?php 
    if (!isset($_GET['id'])){
        header("Location: /admin/filtro");
        die();
    }
	include_once('src/controller/Filtro.php')
?>
<head>
    <link href="public/view/admin/filtro/style.css" rel="stylesheet">
    <script src="/public/view/admin/filtro/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <label class="title">Deletar Filtro</label>
		<br>
		<label class="message_alert" id="messageAlert"></label>
		<br>
		<?php 
			$FiltroController = new FiltroController();
			$FiltroController = json_decode($FiltroController->buscar(['id' => $_GET['id']]));
			$filtro = $FiltroController->filtro;
		?>
		<form id="deletar">
			<input type="hidden" id="filtro" name="filtro" value="<?php echo $filtro->id?>">
			<input type="hidden" id="uniqid" name="uniqid" value="<?php echo $filtro->uniqid?>">
			<label>Nome</label>
			</br>
			<label><b><?php echo $filtro->nome?></b></label>
			</br>
			<br>
			<input class='button deletar' type="submit" value="Deletar">
		</form>
    </div>
</div>