<?php

require_once 'Tarefas.php';

class CrudTarefas extends Tarefas{

	protected $tabela = 'tarefas';

	//inserir na tabela tarefas
	public function inserir(){
		$sql = "Insert into $this->tabela(descricao,verificacao) Values(:descricao,:verificacao);";
		$stm = DB::prepare($sql);
		$stm->bindParam(':descricao',$this->descricao);
		$stm->bindParam(':verificacao',$this->verificacao);
		return $stm->execute();
	}

	//Editar tarefa

	//Excluir tarefa

	//Selecionar as todas as tarefas
	public function findAll(){
		$sql = "Select * from $this->tabela";
		$stm = DB::prepare($sql);
		$stm->execute();
		return $stm->fetchAll();
	}
}





?>