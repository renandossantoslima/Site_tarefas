<?php

require_once 'DB.php';

abstract class Tarefas extends DB{

	protected $tabela;
	public $descricao;
	public $verificacao;
	public $data;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}


}







?>