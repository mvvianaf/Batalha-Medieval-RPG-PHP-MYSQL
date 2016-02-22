<?php
	abstract class CRUD extends CI_Controller{

		protected $destino;
		
		abstract protected function popular();
		abstract protected function getModel();
		
		public function inserir(){
			$this->popular();
			$this->getModel()->inserir();		
			redirect($this->destino, 'refresh');
        }
		
		public function alterar(){
           	$this->getModel()->id=$this->input->post('id');
           	$this->popular();
           	$this->getModel()->alterar();
           	redirect($this->destino, 'refresh');
      	}
        
		public function deletar($id){
			$this->getModel()->deletar($id);
			redirect($this->destino, 'refresh');
		}
		
	}
?>