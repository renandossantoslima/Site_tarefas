<?php
    function __autoload($class) {
        require_once  $class . '.php';
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Site</title>
		<meta content-type='text/html' charset="utf-8">
	</head>
	<body>

		<?php
			//Intancia as tarefas
			$tarefas = new CrudTarefas();

			foreach ($tarefas->findAll() as $key => $value) {
		?>

		<p><?php echo $descricao = $value->descricao; ?></p>
		<span><?php echo $verificaacao = $value->verificaacao; ?></span>

	<?php } ?>

	</body>
</html>