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
	public function update($id){
		$sql = "Update $this->tabela Set descricao = :des, verificacao = :veri where id = :id;";
		$stm = DB::prepare($sql);
		$stm->bindParam(':id',$id,PDO::PARAM_INT);
		$stm->bindParam(':des',$this->descricao);
		$stm->bindParam(':veri',$this->verificacao);
		return $stm->execute();
	}

	//Excluir tarefa
	public function delete($id){
		$sql = "Delete from $this->tabela Where id = :id";
		$stm = DB::prepare($sql);
		$stm->bindParam(':id',$id, PDO::PARAM_INT);
		return $stm->execute();
	}

	//Selecionar as todas as tarefas
	public function findAll(){
		$sql = "Select * from $this->tabela Order by id Desc";
		$stm = DB::prepare($sql);
		$stm->execute();
		return $stm->fetchAll();
	}

	//muda a verificação direto na pagina principal
	public function updateVerificacao($id){
		$sql = "update $this->tabela Set verificacao = :veri Where id = :id";
		$stm = DB::prepare($sql);
		$stm->bindParam(':id',$id,PDO::PARAM_INT);
		$stm->bindParam(':veri',$this->verificacao);
		return $stm->execute();
	}
}





?>