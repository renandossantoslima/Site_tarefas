<?php
    function __autoload($class) {
        require_once  $class . '.php';
    }
?>

<?php require_once 'topo.html'; ?>

		<?php

		//intancio a classe
		$tarefas  = new CrudTarefas();

		if(isset($_POST['atualizar'])){
			$id = $_POST['id'];
			$descricao = $_POST['descricao'];
			$verificacao = $_POST['verificacao'];

			//teste de botao radio para verificação
			//$teste = $_POST['teste'];

			$tarefas->__set('descricao',$descricao);
			$tarefas->__set('verificacao',$verificacao);
			$tarefas->update($id);

			echo "<div class='alert alert-success' role='alert'>
  							Autalizada com sucesso!
					</div>";
			//header('Location: index.php');

		}else if(isset($_POST['editar'])){

			$id = $_POST['id'];
			$descricao = $_POST['descricao'];
			$verificacao = $_POST['verificacao'];

		}else{
			echo "<div class='alert alert-danger' role='alert'>
  							Tarefa não atualizada!
					</div>";
		}

		?>

		<div class="container quadro"><!-- inicio container -->

			<h3>Editar tarefa</h3>

			<form method="post"><!-- inicio form -->

				<div class="form-group">
					<label for="descricao">Atualize a tarefa:</label>
					<input type="text"class="form-control" name="descricao" value="<?php echo $descricao; ?>">
				</div>

				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="hidden" name="verificacao" value="<?php echo $verificacao; ?>">


				<?php if($verificacao == 1){ 
				?>
				<div class="row">
					<div class="col-4">
						<input type="radio" name="verificacao" value="1" checked="checked">Concluida</br>
					</div>
					<div class="col-4">
						<input type="radio" name="verificacao" value="0">Não concluida
					</div>
				</div>

				<?php }else{ ?>
					<div class="row">
						<div class="col-4">
							<input type="radio" name="verificacao" value="1">Concluida</br>
						</div>
						<div class="col-4">
							<input type="radio" name="verificacao" value="0" checked="checked">Não concluida</br>
						</div>
					</div>
					
				<?php }?>

				<div class="botao">
					<button type="submit" class="btn btn-primary" name="atualizar">Atualizar</button>
				</div>
				
			</form><!-- fim form -->

			<button class="btn btn-primary" type="submit"><a href="index.php">Voltar</a></button>
			
		</div><!-- fim container -->

<?php require_once 'rodape.html'; ?>