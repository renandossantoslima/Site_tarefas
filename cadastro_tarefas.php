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

		$stmt = new CrudTarefas();

		if(isset($_POST['btnsave'])):

			//pegando os valores da pagina de cadastro
			$descricao = $_POST['descricao'];
			$verificacao = 0;


			//setando os valores
			$stmt->__set('descricao',$descricao);
			$stmt->__set('verificacao',$verificacao);


			//se inserir no banco
			if($stmt->inserir()){
				echo 'Inserido com sucesso!!!';
			}else{
				echo 'Erro ao inserir no banco';
			}

		endif;

		?>

		<form method="post" enctype="multipart/form-data"><!-- inicio form  -->

			<p>Descricao tarefa:</p>
			<input type="text" name="descricao" required>

			<button type="subimt" name="btnsave">Salvar</button>
			
		</form><!-- fim form  -->

		<button><a href="index.php">Voltar</a></button>

	</body>
</html>