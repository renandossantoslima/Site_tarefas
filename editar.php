<?php
    function __autoload($class) {
        require_once  $class . '.php';
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Site</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php

		//intancio a classe
		$tarefas  = new CrudTarefas();

		if(isset($_POST['atualizar'])){
			$id = $_POST['id'];
			$descricao = $_POST['descricao'];
			$verificacao = $_POST['verificacao'];

			$tarefas->__set('descricao',$descricao);
			$tarefas->__set('verificacao',$verificacao);
			$tarefas->update($id);

			echo "Deu certo";
			//header('Location: index.php');

		}else if(isset($_POST['editar'])){

			$id = $_POST['id'];
			$descricao = $_POST['descricao'];
			$verificacao = $_POST['verificacao'];

		}else{
			echo "Deu erro";
		}

		?>

		<form method="post"><!-- inicio form -->

			<label>Descricao</label>
			<input type="text" name="descricao" value="<?php echo $descricao; ?>">

			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="verificacao" value="<?php echo $verificacao; ?>">
			<button type="submit" name="atualizar">Atualizar</button>
			
		</form><!-- fim form -->

		<button type="submit"><a href="index.php">Voltar</a></button>

	</body>
</html>