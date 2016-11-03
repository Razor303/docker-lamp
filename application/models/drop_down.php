<?php

class Drop_down extends CI_Model {

	public function __construct() {

			parent::__construct();
	 }


		public function get_action_drop_downs () {
			$query=$this->db->get('action_drop_down');
			return $query->result_array();
		}

		public function get_from_drop_downs ($aragementId=array()) {
			$id = $aragementId['id'];
			$where = "aragement_id='".$id."'";
			$this->db->select()->from('aragement')->where($where);
			$query=$this->db->get();
			return $query->result_array();
		}

		public function get_department () {
			$query=$this->db->get('departments');
			return $query->result_array();
		}

		public function get_subDepartments ($departId=array()) {
			$id = $departId['id'];
			$where = "department_id='".$id."'";
			$this->db->select()->from('sub_departments')->where($where);
			$query=$this->db->get();
			return $query->result_array();
		}

		public function get_transport () {
			$query=$this->db->get('transport_drop_down');
			return $query->result_array();
		}

		public function get_risk () {
			$query=$this->db->get('infection_risk_drop_down');
			return $query->result_array();
		}
}
