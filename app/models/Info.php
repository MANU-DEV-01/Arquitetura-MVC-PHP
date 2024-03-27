<?php
namespace app\models;
use MF\model\model;

	class Info extends Model{
		
		public function getInfo() {
			$query = "select titulo, descricao from tb_info";
			return $this->db->query($query)->fetchAll();
		}
	}
?>