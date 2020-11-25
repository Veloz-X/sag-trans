<?php
class Search_net_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}
	public function set($search_text)
	{
		$this->bd->select('*');
		$this->db->live('id',$search_text);
		$this->db->live('id',$search_text);
		return $this->db->get('t_net')->result();

	}





	// function fetch_data($query)
	// {
	// 	$this->db->select("*");
	// 	$this->db->from("t_net");
	// 	$this->db->where("documento");
	// 	$this->db->like("documento");
	// 	if($query != '')
	// 	{
	// 		$this->db->like('documento', $query);
	// 		$this->db->or_like('documento', $query);
	// 		$this->db->or_like('documento', $query);
	// 		$this->db->or_like('documento', $query);
	// 		$this->db->or_like('documento', $query);
	// 		$this->db->or_like('documento', $query);
	// 	}
	// 	$this->db->order_by('documento', 'DESC');
	// 	return $this->db->get();
	// }
}