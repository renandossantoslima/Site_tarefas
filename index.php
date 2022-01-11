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

		<form method="post" action="cadastro_tarefas.php" enctype="multipart/form-data"><!-- inicio form  -->

			<button type="subimt">Cadastrar</button>
			
		</form><!-- fim form  -->

		<?php
			//Intancia as tarefas
			$tarefas = new CrudTarefas();

			foreach ($tarefas->findAll() as $key => $value) {
		?>

		<p><?php echo $descricao = $value->descricao; ?></p>
		

	<?php } ?>

	</body>
</html>