<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {
    public function selecionar($condicao = array()){
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from('usuarios');
		return $this->db->get()->first_row();
	}
	
	public function inserir($itens){
		$res = $this->db->insert('usuarios', $itens);
        return $res;
	}
    
    public function atualizar($itens){
        $this->db->where('login', $itens['login']);
		$res = $this->db->update('usuarios', $itens);
        return $res;
    }
	
	public function excluir($condicao) {
		$this->db->where($condicao);
		$this->db->delete('usuarios');
	}
}