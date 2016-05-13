<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experiencias extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('ExperienciaModel', 'experiencias');
	}
    
	public function index()	{
        $experiencias = $this->experiencias->listar();
        
        $dados = array(
            'experiencias' => $experiencias
        );
        
		$this->template->load('templates/painel', 'painel/experiencias/principal', $dados);
	}
    
    public function minhas_experiencias()	{
        $filtro = array(
            'usuario' => $this->session->userdata('login')    
        );
        
        $experiencias = $this->experiencias->listar($filtro);
        
        $dados = array(
            'experiencias' => $experiencias
        );
        
		$this->template->load('templates/painel', 'painel/experiencias/principal', $dados);
	}
    
    public function nova(){
        $this->template->load('templates/painel', 'painel/experiencias/nova');
    }
    
    public function gravar() {
        $experiencia = array(
            'usuario'         => $this->session->userdata('login'),
            'titulo'          => $this->input->post('titulo'),
            'data_realizacao' => $this->input->post('data_realizacao'),
            'conteudo'        => $this->input->post('descricao')    
        );
        
        $this->experiencias->inserir($experiencia);
        
        redirect('experiencias');
    }
}