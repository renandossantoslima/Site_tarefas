<?php

require_once 'Tarefas.php';

class CrudTarefas extends Tarefas{

	protected $tabela = 'tarefas';

	//Selecionar as todas as tarefas
	public function findAll(){
		$sql = "Select * from $this->tabela";
		$stm = DB::prepare($sql);
		$stm->execute();
		return $stm->fetchAll();
	}
}





?>