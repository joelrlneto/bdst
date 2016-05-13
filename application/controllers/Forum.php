<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
	 public function __construct(){
		parent::__construct();
		$this->load->model('UsuarioModel', 'usuarios');
	}
    
	public function index()
	{
		$this->template->load('templates/painel', 'painel/forum');
	}
}