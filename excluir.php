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

		$tarefas = new CrudTarefas();

		if(isset($_POST['excluir'])){

			$id = $_POST['id'];

			$tarefas->delete($id);

			echo "Excluido com sucesso!";
			header("Location: index.php");

		}else{
			echo "Não excluido";
		}

		?>

	</body>
</html>