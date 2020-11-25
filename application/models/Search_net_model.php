<?php
class Search_net_model extends CI_Model
{


	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("t_net");
		if($query != '')
		{
			// $this->db->like('documento', $query, 'after');
			$this->db->like('documento', $query,'after');
			$this->db->or_like('documento', $query,'after');
		// 	$this->db->or_like('documento', $query);
		// 	$this->db->or_like('documento', $query);
		// 	$this->db->or_like('documento', $query);
		// 	$this->db->or_like('documento', $query);
		}
		// $this->db->order_by('documento', 'DESC');
		return $this->db->get();
	}
}