<?php

	class Personagem_Model extends CI_Model{
		
		private $TABELA = "personagens";
		
		public $id;
		public $nome;
		public $raca;
		public $arma;
		public $dado;
		
		public function inserir(){
			return $this->db->insert($this->TABELA,$this);
		}
		public function alterar(){
			$this->db->where('id', $this->id);
    		$this->db->set($this);	
    		return $this->db->update($this->TABELA);
		}
		public function deletar($id){
			$this->db->where('id', $id);
    		return $this->db->delete($this->TABELA);
		}
		public function procurar($id){
			$query = $this->db->get_where($this->TABELA, array('id' => $id));
	        return $query->row_object();	
		}
		public function listar(){
			$this->db->order_by('id','ASC');
			$query = $this->db->get($this->TABELA);
			return $query->result();
		}
		
	}

?>