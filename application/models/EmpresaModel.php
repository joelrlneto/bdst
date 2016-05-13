<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpresaModel extends CI_Model {
    public function selecionar($condicao = array()){
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from('empresas');
		return $this->db->get()->first_row();
	}
	
	public function inserir($itens){
		$res = $this->db->insert('empresas', $itens);
	}
    
    public function atualizar($itens){
        $this->db->where('login', $itens['login']);
		$res = $this->db->update('empresas', $itens);
    }
	
	public function excluir($condicao) {
		$this->db->where($condicao);
		$this->db->delete('empresas');
	}
}