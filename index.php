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

		<?php

			//pega o valor de verificãção
			$verificacao = $value->verificacao;

			//verifica se é verdadeiro ou falso
			if($verificacao == 1){
		?>

		<form method="post" action="editar.php"><!-- inicio form -->
			<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
			<input type="hidden" name="descricao" value="<?php echo $descricao = $value->descricao; ?>">
			<input type="hidden" name="verificacao" value="<?php echo $veridficacao = $value->verificacao; ?>">
			<button type="submit" name="editar" >Editar</button>
			
		</form><!-- fim form -->

		<form method="post" action="excluir.php"><!-- inicio form -->
			<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
			<button type="submit" name="excluir" >Excluir</button>
			
		</form><!-- fim form -->

		<hr>

		<?php }else{ ?>

		<form method="post" action="editar.php"><!-- inicio form -->
			<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
			<input type="hidden" name="descricao" value="<?php echo $descricao = $value->descricao; ?>">
			<input type="hidden" name="verificacao" value="<?php echo $veridficacao = $value->verificacao; ?>">
			<button type="submit" name="editar" >Editar</button>
			
		</form><!-- fim form -->

		<form method="post" action="excluir.php"><!-- inicio form -->
			<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
			<button type="submit" name="excluir" >Excluir</button>
			
		</form><!-- fim form -->

		<form method="post" action="confirmar.php"><!-- inicio form -->
			<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
			<button type="submit" name="confirmar" >Confirmar</button>
			
		</form><!-- fim form -->

		<hr>

		<?php }?>

	<?php } ?>

	</body>
</html>