<?php
class Buscar_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("t_net");
		if($query != '')
		{
			$this->db->like('documento', $query);
			$this->db->or_like('fecha', $query);
			$this->db->or_like('fecha_i', $query);
			$this->db->or_like('fecha_f', $query);
			$this->db->or_like('correo', $query);
		}
		$this->db->order_by('CustomerID', 'DESC');
		return $this->db->get();
	}
}
?>