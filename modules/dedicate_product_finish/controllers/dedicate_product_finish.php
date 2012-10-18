<?php
class Dedicate_product_finish extends MX_Controller{

	function __construct(){
		parent:: __construct();

		$this->load->model('dpf_model');
	}
	function index(){
		$data['finish'] = $this->dpf_model->get_finish();
		$this->load->view('index', $data);
	}

	function save_finish(){
		$data['finish_id'] =  $this->input->post('finish');
		$data['type_counts'] = $this->input->post('type_counts');
		$data['sku'] = $this->input->post('sku');
		
		$this->dpf_model->do_save_finish($data);
			
		$this->index();
	}


}



?>