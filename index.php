<?php
	//requere todas as classes
    function __autoload($class) {
        require_once  $class . '.php';
    }
?>

<?php require_once 'topo.html'; ?>

<div class="container"><!-- inicio container -->

	<h3>Marcador tarefas</h3>

	<div class="row">

		<div clas="col">

			<form method="post" action="cadastro_tarefas.php" enctype="multipart/form-data"><!-- inicio form  -->

				<button type="subimt" class="btn btn-outline-primary btn-sm">Nova tarefa</button>
			
			</form><!-- fim form  -->

		</div>

	</div>

		<?php
			//Intancia as tarefas
			$tarefas = new CrudTarefas();

			foreach ($tarefas->findAll() as $key => $value) {
		?>

		<?php

			//pega o valor de verificãção
			$verificacao = $value->verificacao;

			//verifica se é verdadeiro ou falso
			if($verificacao == 1){
		?>

			<div class="row"><!-- inicio row -->

				<div class="col-10">
					<span><s><?php echo $descricao = $value->descricao; ?></s> (Concluida)</sapn>
				</div>

				<div class="col-1">
					<form method="post" action="editar.php"><!-- inicio form -->
						<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
						<input type="hidden" name="descricao" value="<?php echo $descricao = $value->descricao; ?>">
						<input type="hidden" name="verificacao" value="<?php echo $veridficacao = $value->verificacao; ?>">
						<button type="submit" name="editar" class="btn btn-primary btn-sm">Editar</button>
						
					</form><!-- fim form -->
				</div>

				<div class="col-1">

					<form method="post" action="excluir.php"><!-- inicio form -->
						<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
						<button type="submit" name="excluir" class="btn btn-danger btn-sm" >Excluir</button>
						
					</form><!-- fim form -->
				</div>
			</div><!-- fim do row -->

			<hr>

		<?php }else{ ?>

			<div class="row">
				<div class="col-8">
					<span><?php echo $descricao = $value->descricao; ?></span>
				</div>

				<div class="col-1">
					<form method="post" action="editar.php"><!-- inicio form -->
						<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
						<input type="hidden" name="descricao" value="<?php echo $descricao = $value->descricao; ?>">
						<input type="hidden" name="verificacao" value="<?php echo $veridficacao = $value->verificacao; ?>">
						<button type="submit" name="editar" class="btn btn-primary btn-sm" >Editar</button>
						
					</form><!-- fim form -->
				</div>

				<div class="col-1">
					<form method="post" action="excluir.php"><!-- inicio form -->
						<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
						<button type="submit" name="excluir" class="btn btn-danger btn-sm" >Excluir</button>
						
					</form><!-- fim form -->
				</div>

				<div class="col-2">
					<form method="post" action="confirmar.php"><!-- inicio form -->
						<input type="hidden" name="id" value="<?php echo $id = $value->id; ?>">
						<button type="submit" name="confirmar" class="btn btn-success btn-sm" >Confirmar</button>
						
					</form><!-- fim form -->
				</div>
			</div>
			<hr>

		<?php }?>

	<?php } ?><!-- fim do foreach -->
	
</div><!-- fim container -->

<?php require_once 'rodape.html';?>