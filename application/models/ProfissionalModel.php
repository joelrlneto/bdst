<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfissionalModel extends CI_Model {
    public function selecionar($condicao = array()){
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from('profissionais');
		return $this->db->get()->first_row();
	}
	
	public function inserir($itens){
		$res = $this->db->insert('profissionais', $itens);
	}
    
    public function atualizar($itens){
        $this->db->where('login', $itens['login']);
		$res = $this->db->update('profissionais', $itens);
    }
	
	public function excluir($condicao) {
		$this->db->where($condicao);
		$this->db->delete('profissionais');
	}
}