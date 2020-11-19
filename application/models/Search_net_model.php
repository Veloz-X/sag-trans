<?php
class Search_net_model extends CI_Model
{
	function fetch_data($query,$search)
	{
		$this->db->select("*");
		$this->db->from("t_net");
		// $this->db->where("documento");
		// $this->db->like("documento");
		if($query != '')
		{
			$this->db->like('documento', $query);
			$this->db->or_like('fecha_i', $query);
			$this->db->or_like('fecha_f', $query);
			$this->db->or_like('correo', $query);
			$this->db->or_like('contra', $query);
			$this->db->or_like('tipo', $query);
		}
		$this->db->order_by('documento', 'DESC');
		return $this->db->get();
	}
}
?>