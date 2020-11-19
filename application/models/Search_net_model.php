<?php
class Search_net_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("t_net");
		if($query != '')
		{
			$this->db->like('documento', $query);
			$this->db->or_like('fecha_i', $query);
			$this->db->or_like('fecha_f', $query);
			$this->db->or_like('correo', $query);
            $this->db->or_like('contra', $query);
            $this->db->or_like('tipo', $query);
            $this->db->or_like('estado', $query);
            $this->db->or_like('nota', $query);
		}
		$this->db->order_by('fecha_i', 'DESC');
		return $this->db->get();
	}
}
?>