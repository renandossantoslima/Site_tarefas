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

		//intancia os valores
		$tarefas = new CrudTarefas();

		if(isset($_POST['confirmar'])){

			$id = $_POST['id'];//recebe da principal
			$verificacao = 1;//tona a tarefa concliuda

			$tarefas->__set('verificacao',$verificacao);

			$tarefas->updateVerificacao($id);

			header("Location: index.php");

		}else{
			echo "Deu errado";
		}

		?>

	</body>
</html>