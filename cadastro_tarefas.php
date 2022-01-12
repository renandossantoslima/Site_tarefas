<?php
    function __autoload($class) {
        require_once  $class . '.php';
    }
?>

<?php require_once 'topo.html'; ?>

		<?php

		$stmt = new CrudTarefas();

		if(isset($_POST['btnsave'])):

			//pegando os valores da pagina de cadastro
			$descricao = $_POST['descricao'];
			$verificacao = 0;

			//data
			//$data =  $_POST['data'];


			//setando os valores
			$stmt->__set('descricao',$descricao);
			$stmt->__set('verificacao',$verificacao);

			//$stmt->__set('data',$data);


			//se inserir no banco
			if($stmt->inserir()){
				echo '<div class="alert alert-success" role="alert">
  							Tarefa salva com sucesso!
					</div>';
			}else{
				echo '<div class="alert alert-danger" role="alert">
  						A tarefa nãp foi salva!
					</div>';
			}

		endif;

		?>

		<div class="container quadro"><!-- inicio container -->

			<h3>Cadastro das tarefas</h3>

			<form method="post" enctype="multipart/form-data"><!-- inicio form  -->

				<div class="form-group">
					<label for="descricao">Digite a tarefa:</label>
					<input type="text" name="descricao" class="form-control" placeholder="Comprar um presente" required>
				</div>

				<div class="botao">
					<button type="subimt" name="btnsave" class="btn btn-primary">Salvar</button>
				</div>
				
			</form><!-- fim form  -->

			<button class="btn btn-primary"><a href="index.php">Voltar</a></button>
			
		</div><!-- fim container -->

<?php require_once 'rodape.html'; ?>