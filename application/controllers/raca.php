<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	include 'CRUD.php';
	
	class Raca extends CRUD {
			
			function __construct() {
		    	parent::__construct();
		    	$this->load->model('Raca_Model','',TRUE);
		    	$this->destino = "raca";
		    }
		   	
		   	public function index(){
		   		$data['racas'] = $this->getModel()->listar();
		   		$this->load->view('admRacas',$data);
		   	}
		   	
		   	protected function popular(){
		   		$this->getModel()->raca=$this->input->post('raca');
				$this->getModel()->vida=$this->input->post('vida');
				$this->getModel()->forca=$this->input->post('forca');
				$this->getModel()->agilidade=$this->input->post('agilidade');
		   	}
		   	
		   	protected function getModel(){
		   		return $this->Raca_Model;
		   	}
		   	
	}
?>