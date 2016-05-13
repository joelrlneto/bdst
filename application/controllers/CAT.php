<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAT extends CI_Controller {
	 public function __construct(){
		parent::__construct();
        $this->load->model('CATModel', 'cats');
	}
    
    public function index() {
        $filtro = array(
            'usuario' => $this->session->userdata('login')    
        );
        
        $cats = $this->cats->listar_todas($filtro);
        
        $dados = array(
            'cats' => $cats
        );
        
        $this->template->load('templates/painel', 'painel/cat/principal', $dados);    
    }
    
	public function nova() {
		$this->template->load('templates/painel', 'painel/cat/nova');
	}
    
    public function gravar() {
        $cat = array(
            'usuario'          => $this->session->userdata('login'),
            'nome_funcionario' => $this->input->post('nome_funcionario'),
            'dias_afastado'    => $this->input->post('dias_afastado'),
            'data_ocorrencia'  => $this->input->post('data_ocorrencia'),
            'descricao'        => $this->input->post('descricao') 
        );
        
        $this->cats->inserir($cat);
        
        redirect('cat');
    }
    
    public function imprimir($id) {
        $filtro = array(
            'id' => $id  
        );
        
        $cat = $this->cats->selecionar($filtro);
        
        $dados = array(
            'cat' => $cat
        );
        
        $this->load->view('painel/cat/impressao', $dados);
    }
    
    public function excluir($id) {
        $filtro = array(
            'id' => $id  
        );
        
        $cat = $this->cats->selecionar($filtro);
        
        if($cat->usuario == $this->session->userdata('login')){
            $this->cats->excluir($filtro);
        }
        
        redirect('/cat');
    }
}