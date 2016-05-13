<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	 public function __construct(){
		parent::__construct();
		$this->load->model('UsuarioModel', 'usuarios');
		$this->load->model('ProfissionalModel', 'profissionais');
		$this->load->model('EmpresaModel', 'empresas');
	}
    
	public function cadastrar()	{
		$this->session->unset_userdata();
		
		$usuario = array(
            'email' => $this->input->post('email'),
            'login' => $this->input->post('login'),
            'senha' => $this->input->post('senha')
        );
        
        $resultado = $this->usuarios->inserir($usuario);
        
		$this->session->set_userdata('tipo', 'sem tipo');
		$this->session->set_userdata('login', $usuario['logins']);
		
        redirect('perfil');
	}
	
	public function excluir_conta() {
		$condicao = array(
			'login' => $this->session->userdata('login')	
		);
		
		$this->empresas->excluir($condicao);
		$this->profissionais->excluir($condicao);
		$this->usuarios->excluir($condicao);
		
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('tipo');
		
		redirect('home');
	}
}