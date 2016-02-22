<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexController extends CI_Controller {

	function __construct() {
    	parent::__construct();
   	}
   	
	public function index(){
		$this->load->model('Personagem_Model','',TRUE);
		$this->load->model('Arma_Model','',TRUE);
		$this->load->model('Raca_Model','',TRUE);
		$this->load->model('Personagem_Completo','',TRUE);
		$data['pC'] = $this->construirPersonagens();
		$this->load->view('index',$data);
	}
	
	private function construirPersonagens(){
		$pC = array();
		$this->Personagem_Model->nome=$this->input->post('nome');
		foreach($this->Personagem_Model->listar() as $key=>$p){
			$personagem = new Personagem_Completo();
			//INFORMACOES DO PERSONAGEM
			$personagem->id=$p->id;
			$personagem->nome=$p->nome;
			$personagem->dado=$p->dado;
			//INFORMACOES DA RACA
			$raca = $this->Raca_Model->procurar($p->raca);
			$personagem->raca=$raca->raca;
			$personagem->vida=$raca->vida;
			$personagem->forca=$raca->forca;
			$personagem->agilidade=$raca->agilidade;
			//INFORMACOES DA ARMA
			$arma = $this->Arma_Model->procurar($p->arma);
			$personagem->arma=$arma->descricao;
			$personagem->ataque=$arma->ataque;
			$personagem->defesa=$arma->defesa;
			$pC[]=$personagem;
		}
		return $pC;
	}
	
}
