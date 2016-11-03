<?php

class Mobile_job_list_model extends CI_Model {

	public function __construct() {

			parent::__construct();
	 }

		public function model_operations () {
			$query=$this->db->get('jobs');
			return $query->result_array();
		}
}
