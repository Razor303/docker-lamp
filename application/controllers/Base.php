<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("operations");
	 }
	public function index()
	{
 		$this->HQ();
	}

	public function HQ()
	{
		$this->load->view('head_pc');
		$this->load->view('header');
		$this->load->view('base_page');
		$this->load->view('footer');
	}

	public function get_jobs_operations() {

		$jobs =$this->operations-> model_operations();
		$countJobs = count($jobs);
		if($countJobs === 0) {
			echo 'No Jobs... Porters On Standby!';
		} else {
			echo '<table>
				<tr>
				<th>QR Code</th>
				<th>Action</th>
				<th>From Location</th>
				<th>To Location</th>
				<th>Transport</th>
				<th>Infection Risk</th>
				<th>Breach Time</th>
				<th>Requested By</th>
				<th>RAE</th>
				<th>Notes</th>
				<th>Asigned To</Sth>
				<th>Time Waiting</th>
				</tr>';
				for($i = 0; $i < $countJobs; $i++) {
					echo '<tr>
									<td >
									<img src="qrcode.php?text={job-id:'. $jobs[$i]['job_id'] .'}&size=150&padding=2" class="qrCode" alt="QRCode"/></td>
									<td >'. $jobs[$i]['action'].'</td>
									<td >'. $jobs[$i]['from_location'].'</td>
									<td >'. $jobs[$i]['to_location'].'</td>
									<td >'. $jobs[$i]['transport'].'</td>
									<td >'. $jobs[$i]['infection_risk'].'</td>
									<td >'. $jobs[$i]['breach_time'].'</td>
									<td>'. $jobs[$i]['requested_by'].'</td>
									<td>'. $jobs[$i]['rae'].'</td>
									<td >'. $jobs[$i]['notes'].'</td>
									<td >'. $jobs[$i]['job_id'].'</td>
									<td >'. $jobs[$i]['job_id'].'</td>
								</tr>';
				}
					echo '</table>';
		}
}
}
?>
