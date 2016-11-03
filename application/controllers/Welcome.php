<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("mobile_job_list_model");
	 }

	public function index()
	{
		$this->load->view('head');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}

	public function job()
	{
		$this->load->view('head');
		$this->load->view('job-page');
		$this->load->view('footer');
	}

	public function mobile_display_jobs() {

		$jobs =$this->mobile_job_list_model->model_operations();
		$countJobs = count($jobs);
		if($countJobs === 0) {
			echo 'No Jobs... Standby!';
		} else {
				for($i = 0; $i < $countJobs; $i++) {
					echo '<li><a href="#job-page">
					        <label><strong>From: </strong><span><strong>????</strong></span><span><strong>Cub </strong>'.$jobs[$i]['from_location'].'</span> </label>
					        <label><strong>To: </strong><span><strong>'.$jobs[$i]['to_location'].'</strong></span><span><strong>Bed </strong></span> </label>
					        <label><strong>Transport: </strong><strong>'.$jobs[$i]['transport'].'</strong></label>
					        <label><strong>Infection Risk: </strong><strong>'.$jobs[$i]['infection_risk'].'</strong></label>
					        <label><strong>Notes:</strong></label>
					        <p><strong>'.$jobs[$i]['notes'].'</strong></p>
					        <label><strong>Breach:</strong>'.$jobs[$i]['breach_time'].'</label>
					        </a></li><br/><br/>';


				}


		}
	}

}
