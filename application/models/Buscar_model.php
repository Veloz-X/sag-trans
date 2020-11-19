<?php
class Buscar_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("t_net");
		if($query != '')
		{
			$this->db->like('fecha', $query);
			$this->db->or_like('fecha', $query);
			$this->db->or_like('fecha', $query);
			$this->db->or_like('fecha', $query);
			$this->db->or_like('fecha', $query);
		}
		$this->db->order_by('fecha', 'DESC');
		return $this->db->get();
	}
}
?>