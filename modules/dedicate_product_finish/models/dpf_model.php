<?php
class Dpf_model extends CI_Model{


	function get_finish(){		
		$this->db->select('id, name');
		$this->db->from('finish');
		return $this->db->get()->result_array();
	}

	function do_save_finish($data){

		$types = array();

		foreach ($data['finish_id'] as $key) {

			$types[] = array(
							'id' => '', 
							'sku' => $data['sku'],
							'finish_id_fk' => $key['finish']
							);			
		}
		
		$this->db->insert_batch('product_finish', $types);
	}


}



?>
