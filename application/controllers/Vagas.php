<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vagas extends CI_Controller {
	 public function __construct(){
		parent::__construct();
		$this->load->model('VagaModel', 'vagas');
	}
    
	public function index()
	{
		$this->template->load('templates/painel', 'painel/vagas/principal');
	}
    
    public function novo()
	{
		$this->template->load('templates/painel', 'painel/vagas/nova');
	}
    
    public function gravar()
	{
		
	}
}