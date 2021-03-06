<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VagaModel extends CI_Model {
    public function selecionar($condicao = array()){
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from('vagas');
		return $this->db->get()->first_row();
	}
    
    public function listar($condicao = array()) {
        $this->db->select('*');
		$this->db->where($condicao);
		$this->db->from('vagas');
		return $this->db->get()->result();
    }
	
	public function inserir($itens){
		$this->db->insert('vagas', $itens);
        return $this->db->insert_id();
	}
    
    public function atualizar($itens){
        $this->db->where('id', $itens['id']);
		$res = $this->db->update('vagas', $itens);
    }
	
	public function excluir($condicao) {
		$this->db->where($condicao);
		$this->db->delete('vagas');
	}
}