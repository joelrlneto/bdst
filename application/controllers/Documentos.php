<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('DocumentoModel', 'documentos');
	}
    
	public function index()
	{
		$this->template->load('templates/painel', 'painel/documentos/principal');
	}
    
    public function novo()
	{
		$this->template->load('templates/painel', 'painel/documentos/novo');
	}
    
    public function gravar()
	{
		
	}
}