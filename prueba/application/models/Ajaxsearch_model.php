<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("t_net");
		if($query != '')
		{
			$this->db->like('documento', $query);
			$this->db->or_like('documento', $query);
			$this->db->or_like('documento', $query);
			$this->db->or_like('documento', $query);
			$this->db->or_like('documento', $query);
		}
		$this->db->order_by('CustomerID', 'DESC');
		return $this->db->get();
	}
}
?>