<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CATModel extends CI_Model {
    public function selecionar($condicao = array()){
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from('cat');
		return $this->db->get()->first_row();
	}
	
	public function listar_todas($condicao) {
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from('cat');
		return $this->db->get()->result();
	}
	
	public function inserir($itens){
		$res = $this->db->insert('cat', $itens);
	}
    
    public function atualizar($itens){
        $this->db->where('id', $itens['id']);
		$res = $this->db->update('cat', $itens);
    }
	
	public function excluir($condicao) {
		$this->db->where($condicao);
		$this->db->delete('cat');
	}
}