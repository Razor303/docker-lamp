<?php

class Job extends CI_Model {

	public function __construct() {

			parent::__construct();
	 }

		public function insert_job($data) {
			$this->db->insert('jobs', $data);
			if ($this->db->affected_rows() > 0) {
				return TRUE;
				} else {
					return FALSE;
			}
		}
		public function get_all_jobs () {
			$query=$this->db->get('jobs');
			return $query->result_array();
		}
}
