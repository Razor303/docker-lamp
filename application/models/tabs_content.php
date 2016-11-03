<?php

class Tabs_content extends CI_Model {

	public function __construct() {

			parent::__construct();
	 }


		public function get_tabs_content () {
			$query=$this->db->get('departments');
			return $query->result_array();
		}

    public function get_subtabs_content ($departId=array()) {
			$id = $departId['id'];
			$where = "department_id='".$id."'";
			$this->db->select()->from('sub_departments')->where($where)->order_by('sub_departments_id', 'decs');
			$query=$this->db->get();
			return $query->result_array();
    }

		
}
