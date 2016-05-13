<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticacao extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('UsuarioModel', 'usuarios');
        $this->load->model('ProfissionalModel', 'profissionais');
		$this->load->model('EmpresaModel', 'empresas');
	}
    
	public function acessar() {
        $this->session->unset_userdata();
        
		$filtro = array(
            'login' => $this->input->post('login')
        );
        
        $usuario = $this->usuarios->selecionar($filtro);
        
        if($usuario){
            if($usuario->senha == $this->input->post('senha')) {
                $this->session->set_userdata('login', $usuario->login);
              
                $profissional = $this->profissionais->selecionar($filtro);
                $empresa      = $this->empresas->selecionar($filtro);
               
                if($profissional){
                    $this->session->set_userdata('tipo', 'profissional');
                    $this->session->set_userdata('nome', $profissional->nome);
                    redirect('painel');
                } 
                else if ($empresa) {
                    $this->session->set_userdata('tipo', 'empresa');
                    $this->session->set_userdata('nome', $empresa->nome_fantasia);
                    redirect('painel');
                }
                else {
                    $this->session->set_userdata('tipo', 'sem tipo');
                    redirect('perfil');
                }
            }
            else {
                echo 'Senha incorreta';
            }
        }
        else {
            echo 'Usuário não cadastrado.';
        }
	}
    
    public function sair() {
        $this->session->unset_userdata();
        redirect('home');    
    }
}