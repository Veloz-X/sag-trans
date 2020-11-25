<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_net extends CI_Controller {
	public function __construct()
	{
		$this->load->model('search_net_model');
		parent::__construct();
	}

    function index()
	{
		$search_text=$this->input->post('search_text',true);
		$data['store']=$this->search_net_model->set($search_text);
		$this->load->view('search_net',$data);
	}

	function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('search_net_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
			$data = $this->search_net_model->fetch_data($query);
		$output .= '
		<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal Code</th>
							<th>Country</th>
						</tr>
		';
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
						<tr>
							<td>'.$row->documento.'</td>
							<td>'.$row->documento.'</td>
							<td>'.$row->documento.'</td>
							<td>'.$row->documento.'</td>
							<td>'.$row->documento.'</td>
						</tr>
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5">No Data Found</td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
		}else {
			echo '<br> Ingrese el # De Documento';
		}
		
	}
	
}
