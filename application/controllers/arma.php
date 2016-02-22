<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	include 'CRUD.php';
	
	class Arma extends CRUD {
			
			function __construct() {
		    	parent::__construct();
		    	$this->load->model('Arma_Model','',TRUE);
		    	$this->destino = "arma";
		   	}
		   	
		   	public function index(){
		   		$data['armas'] = $this->Arma_Model->listar();
		   		$this->load->view('admArmas',$data);
		   	}

		   	protected function popular(){
		   		$this->Arma_Model->descricao=$this->input->post('descricao');
		   		$this->Arma_Model->ataque=$this->input->post('ataque');
		   		$this->Arma_Model->defesa=$this->input->post('defesa');
		   	}
		   	
		   	protected function getModel(){
		   		return $this->Arma_Model;
		   	}
		   	
	}

?>