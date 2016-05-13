<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
	 public function __construct(){
		parent::__construct();
		$this->load->model('UsuarioModel', 'usuarios');
		$this->load->model('ProfissionalModel', 'profissionais');
		$this->load->model('EmpresaModel', 'empresas');		
	}
    
	public function index()	{
		$filtro = array(
			'login' => $this->session->userdata('login')
		);
		
		$profissional = $this->profissionais->selecionar($filtro);
		$empresa      = $this->empresas->selecionar($filtro);
		
		$dados = array(
			'profissional' => $profissional,
			'empresa'      => $empresa
		);
		
		$this->template->load('templates/painel', 'painel/perfil', $dados);		
	}
	
	public function gravar_profissional() {
		$profissional = array(
			'login'     => $this->session->userdata('login'),
			'nome'      => $this->input->post('nome'),
			'profissao' => $this->input->post('profissao'),
			'registro'  => $this->input->post('registro'),
			'curriculo' => $this->input->post('curriculo')
		);
		
		$registro = $this->profissionais->selecionar(array('login' => $this->session->userdata('login')));
		
		if($registro){
			$this->profissionais->atualizar($profissional);
		}
		else {
			$this->profissionais->inserir($profissional);
		}
		
		$this->session->set_userdata('tipo', 'profissional');
		
		redirect('perfil');
	}
	
	public function gravar_empresa() {
		$empresa = array(
			'login'         => $this->session->userdata('login'),
			'nome_fantasia' => $this->input->post('nome_fantasia'),
			'razao_social'  => $this->input->post('razao_social'),
			'ramo_atuacao'  => $this->input->post('ramo_atuacao'),
			'descricao'     => $this->input->post('descricao')
		);
		
		$registro = $this->empresas->selecionar(array('login' => $this->session->userdata('login')));
		
		if($registro) {
			$this->empresas->atualizar($empresa);
		}
		else {
			$this->empresas->inserir($empresa);	
		}
		
		$this->session->set_userdata('tipo', 'empresa');
		
		redirect('perfil');
	}
}