<?php
class Dpf_model extends CI_Model{


	function get_finish(){		
		$this->db->select('id, name');
		$this->db->from('finish');
		return $this->db->get()->result_array();
	}

	function do_save_finish($data){
		//print_r($data['finish_type_id']);
		//echo $data['type_counts'];
		//var obj = new Object();
		
		//$types = array(array('id' =>'','sku' => $sku,'finish_id_fk' => "2"), array('id' =>'','sku' => $sku,'finish_id_fk' => "1"));		

		foreach ($data['finish_id'] as $key) {
			echo $key;
		}
		
		//$this->db->insert_batch('product_finish', $types);
	}


}



?>
