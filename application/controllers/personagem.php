<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	include 'CRUD.php';
	
	class Personagem extends CRUD {
			
			function __construct() {
		    	parent::__construct();
		    	$this->load->model('Personagem_Model','',TRUE);
		    	$this->load->model('Arma_Model','',TRUE);
		    	$this->load->model('Raca_Model','',TRUE);
		    	$this->destino = "personagem";
		   	}
		   	
		   	public function index(){
		   		$personagens['personagens'] = $this->Personagem_Model->listar();
		   		$personagens['armas'] = $this->Arma_Model->listar();
		   		$personagens['racas'] = $this->Raca_Model->listar();
		   		$this->load->view('admPersonagem',$personagens);
		   	}

		   	protected function popular(){
		   		$this->Personagem_Model->nome=$this->input->post('nome');
		   		$this->Personagem_Model->raca=$this->input->post('raca');
				$this->Personagem_Model->arma=$this->input->post('arma');
				$this->Personagem_Model->dado=$this->input->post('dado');
		   	}
		   	
			protected function getModel(){
		   		return $this->Personagem_Model;
		   	}
		   	
	}

?>