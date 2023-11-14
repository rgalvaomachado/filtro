<?php 
    if (!isset($_GET['id'])){
        header("Location: /admin/filtro");
        die();
    }
	include_once('controller/Filtro.php')
?>
<head>
    <link href="public/view/admin/filtro/style.css" rel="stylesheet">
    <script src="/public/view/admin/filtro/script.js"></script>
</head>
<div class="grid-content grid-container">
    <?php include_once('public/view/admin/menu.php')?>
    <div class="grid-item-content">
        <?php include_once('public/view/admin/top.php')?>
        <label class="title">Editar Filtro</label>
		<br>
		<label class="message_alert" id="messageAlert"></label>
		<br>
		<?php 
			$FiltroController = new FiltroController();
			$FiltroController = json_decode($FiltroController->buscar(['id' => $_GET['id']]));
			$filtro = $FiltroController->filtro;
		?>
		<form id="editar">
			<input type="hidden" id="filtro" name="filtro" value="<?php echo $filtro->id?>">
			<label>Nome</label>
			</br>
			<input class='input' name="nome" id="nome" value="<?php echo $filtro->nome?>">
			</br>
			</br>
			<input class='button editar' type="submit" value="Editar">
		</form>
    </div>
</div>