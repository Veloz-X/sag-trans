<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {

    function index()
	{
		$this->load->view('buscar');
	}

	function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('buscar_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}else {
			echo '<br> Ingrese el # De Documento';
		}
		$data = $this->buscar_model->fetch_data($query);
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
		if($data->num_rows() > 1)
		{
			foreach($data->result() as $row)
			{
				$output .= '
						<tr>
							<td>'.$row->fecha.'</td>
							<td>'.$row->fecha.'</td>
							<td>'.$row->fecha.'</td>
							<td>'.$row->fecha.'</td>
							<td>'.$row->fecha.'</td>
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
	}
	
}
