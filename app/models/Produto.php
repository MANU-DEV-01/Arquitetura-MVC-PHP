<?php
namespace app\models;
use MF\model\model;

	class Produto extends Model {
		
		public function getProdutos() {
			$query = "select id, descricao, preco from tb_produtos";
			return $this->db->query($query)->fetchAll();
		}
	}
?>