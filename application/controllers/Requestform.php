<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requestform extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->model("job");
			$this->load->model("drop_down");
			$this->load->model("tabs_content");
	 }

	 public function index() {
	 $this->requestform();
 	}

	 public function requestform() {
		 $this->load->view('head_pc');
		 $this->load->view('header');
		 $this->load->view('requestform-mannual');
		 $this->load->view('footer');
	 }


	 public function nav_form() {
		 $tabs =$this->tabs_content->get_tabs_content();
		 $countTabs = count($tabs);
		 if($countTabs === 0) {
			 echo 'FUCK DIDNT WORK!!';
		 }else {
			 echo '<ul>';
			 	for($a = 0; $a < $countTabs; $a++) {
		     echo '<li><a href="requestform/subtabs?id='.$tabs[$a]['department_id'].'">'.$tabs[$a]['department_name'].'</a></li>';
			 	}
			 	echo '</ul>';

		 }
	 }

	public function subtabs(){
		if($_GET) {
			$departId = array('id' => $_GET['id']);
			$subtabs =$this->tabs_content->get_subtabs_content($departId);
			$countSubTabs = count($subtabs);
			if($countSubTabs === 0) {
				echo 'FUCK DIDNT WORK!!';
			}else {
				for($c = 0; $c < $countSubTabs; $c++) {
			 		echo '<div id="'.$subtabs[$c]['subdepartments_name'].'" class="subTabs">';
					echo '<ul>';
						for($c = 0; $c < $countSubTabs; $c++) {
						 	echo '<li><a href="requestform/tab_content1?id='.$subtabs[$c]['aragement_id'].'">'.$subtabs[$c]['subdepartments_name'].'</a></li>';
						}
						echo'<button id="EMERGANCY">EMERGANCY</buton></ul>';

					}
				echo '</div>';
			}
		}else{
			echo '<span><strong>Whoops!</strong> Something Went Wrong..... <a href="#">Click Here To Reset</a></span>';
		}
	}

		public function jobs() {

			if($_POST) {
				$this->form_validation->set_rules('action', 'Action', 'trim');
				$this->form_validation->set_rules('form', 'From', 'trim');
				$this->form_validation->set_rules('to', 'To', 'trim');
				$this->form_validation->set_rules('transport', 'Transport', 'trim');
				$this->form_validation->set_rules('rae', 'RAE', 'trim');
				$this->form_validation->set_rules('infectionRisk', 'Infection Risk', 'trim');
				$this->form_validation->set_rules('breachTime', 'Breach Time', 'trim');
				$this->form_validation->set_rules('requestedBy', 'User Name', 'trim');

				if ($this->form_validation->run() == FALSE) {

		 			echo '<div class="flash-error">
		  					<span><strong>Whoops!</strong> There Has Been An Error, Please <a href="#">Click Here To Reset</a></span></div>';
				} else {

				$data = array(
				'action'         => $_POST['action'],
				'department'     => $_POST['department'],
				'sub_department' => $_POST['sub_department'],
				'from_location'  => $_POST['from_location'],
				'to_location'    => $_POST['to_location'],
				'transport'      => $_POST['transport'],
				'rae'            => $_POST['rae'],
				'patient_name'   => $_POST['patientName'],
				'infection_risk' => $_POST['infectionRisk'],
				'notes'          => $_POST['notes'],
				'breach_time'    => $_POST['breachTime'],
				'requested_by'   => $_POST['requested_by']
				);

				// Send  data to model
				$return = $this->job->insert_job($data);
				if ($return == TRUE) {
					echo '<div class="flash-success">
  				<span>Your Request was successful, A Porter Will Be With You ASAP!....... </span>
					</div>';
				} else {
				echo '<div class="flash-error">
							<span><strong>Whoops!</strong> Something Went Wrong..... <a href="#">Click Here To Reset</a></span></div>';
				}
				}
			} else {
				echo '<div class="flash-error">
						<span><strong>Whoops!</strong> NO POST <a href="#">Click Here To Reset</a></span></div>';
			}
	}

		public function display_jobs() {

			$jobs =$this->job->get_all_jobs();
			$countJobs = count($jobs);
			if($countJobs === 0) {
				echo '<div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
								<div class="portlet-header ui-widget-header ui-corner-all">No Outstanding Jobs...  Porters On Standby!</div>
								<div class="portlet-content"></div>
								</div>';
			} else {
					for($i = 0; $i < $countJobs; $i++) {
						echo '<div " class="portlet">
										<div class="portlet-header">
										<span id="job-id">'.$jobs[$i]['job_id'].'</span>
											<label class="cub">From: <span></span> Cub: <span>'.$jobs[$i]['from_location'].'</span></label><label class="PatientsName">Patients Name: <span>'. $jobs[$i]['patient_name'].'</span></label><label class="breachTime">Breach Time: <span>'. $jobs[$i]['breach_time'].'</span></label></div>';
						echo '<div class="portlet-content">
											<table>
												<tr>
													<td>
														<label>Requested By:</label><span>'. $jobs[$i]['requested_by'].'</span>
													</td>
													<td>
														<label>RAE:</label><span>'. $jobs[$i]['rae'].'</span>
													</td>
													<td>
														<label>To:</label><span>'. $jobs[$i]['to_location'].'</span>
													</td>
												</tr>
												<tr>
													<td>
														<label>Action:</label><span>'. $jobs[$i]['action'].'</span>
													</td>
													<td>
														<label>Transport:</label><span>'. $jobs[$i]['transport'].'</span>
													</td>
													<td>
														<label>Infection Risk:</label><span>'. $jobs[$i]['infection_risk'].'</span>
													</td>
												</tr>
												<tr>
													<td>
														<label>Current Location: </label><span></span>
													</td>
													<td>
														<button>Quick Request</button>
													</td>
												</tr>
												<tr>
													<td>
														<label>Notes: </label><span>'. $jobs[$i]['notes'].'</span>
													</td>
												</tr>
											</table>
											<img src="qrcode.php?text={hello mucker G}&size=150&padding=2" class="qrCode" alt="QRCode"/>
											</div>
										</div>';

					}

			}
	}
		public function tab_content1() {
			if($_GET) {
			$aragementId = array('id' => $_GET['id']);

			$action_dropDown =$this->drop_down->get_action_drop_downs();
			$countAction = count($action_dropDown);
			if($countAction === 0) {
				echo 'FUCK IT DID NOT WORK';
			}else {
			echo '<div class="left-screen-split">
			  <form action="Requestform/jobs" method="post" id="mannual-request" class="mannual-request-form"</form>;
			    <div id="messages"></div>
			    <table>
			      <tbody>
			        <tr>
							<td><label for="action" class="select">Action:</label></td>
							<td><select name="action" id="action">
							    <option value="">Please select</option>';
									for($e = 0; $e < $countAction; $e++) {
							        echo '<option value="'.$action_dropDown[$e]['action_drop_down_id']. '">'.$action_dropDown[$e]['actions'].'</option>';
										}
						echo'</select></td>
			          <td class="control-group"></td>
			        </tr>
			        <tr>';
							$from_dropDown =$this->drop_down->get_from_drop_downs($aragementId);
							$countFrom = count($from_dropDown);
							if($countFrom === 0) {
								echo 'FUCK IT DID NOT WORK';
							}else {
								echo '<td><label for="from_location" class="select">From:</label></td>
								<td><input type="text" name="department" id="department" class="hidden-input" value="" /><br/>
								<input type="text" name="sub_department" id="sub_department" class="hidden-input" value="" /><br/>
								<select name="from_location" id="from_location">

								    <option value="">Please select</option>';
										for($e = 0; $e < $countFrom; $e++) {
											$value = $from_dropDown[$e]['number_of'] + 1;
											$aragement = $from_dropDown[$e]['aragement'];
											for($f = 1; $f < $value; $f++) {
									      echo '<option value="'.$aragement.' '.$f.'">'.$aragement.' '.$f.'</option>';
											}
										}
							echo'</select></td>';
							}
			        echo '<td class="control-group"></td>
			        </tr>
			        <tr>';
							$to_dropDown =$this->drop_down->get_department();
							$countTo = count($to_dropDown);
							if($countTo === 0) {
								echo 'FUCK IT DID NOT WORK';
							}else {
								echo '<td><label for="to_location" class="select">To:</label></td>
								<td><select name="to_location" id="to_location">
										<option value="">Please select</option>
										<optgroup label="Quick Pick">';

										echo '</optgroup>
										<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;Level 0">';
										for($e = 0; $e < $countTo; $e++) {
											echo '<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;'.$to_dropDown[$e]['department_name'].'">';

											$departId = array('id' => $to_dropDown[$e]['department_id']);
											$subdepart =$this->drop_down->get_subDepartments($departId);
											$countSubDepart = count($subdepart);
											if($countSubDepart === 0) {
												echo 'FUCK IT DID NOT WORK';
											}else {
												for($f = 0; $f < $countSubDepart; $f++) {
													echo '<option value="'.$subdepart[$f]['subdepartments_name'].'>'.$subdepart[$f]['subdepartments_name'].'</option>';
												}
											}
											echo '</optgroup>';
										}
							echo'</optgroup>
							<optgroup label="Level 1">

							</optgroup>
							<optgroup label="Level 2">

							</optgroup>
							<optgroup label="Level 3">

							</optgroup>
							<optgroup label="Level 4">

							</optgroup>
							<optgroup label="Exstornal Buildings">

							</optgroup>
							<optgroup label="Gate">

							</optgroup>
							</optgroup>
							<optgroup label="Other">

							</optgroup>
							</select></td>';
							}
			          echo '<td class="control-group"></td>
			        </tr>
			        <tr>
							<td><label for="transport" class="select">Tranport:</label></td>
							<td><select name="transport" id="transport">
									<option value="">Please select</option>';
									$trans_dropDown =$this->drop_down->get_transport();
									$countTrans = count($trans_dropDown);
									if($countTrans === 0) {
										echo 'FUCK IT DID NOT WORK';
									}else {
									for($e = 0; $e < $countTrans; $e++) {
											echo '<option value="'.$trans_dropDown[$e]['transport_id']. '">'.$trans_dropDown[$e]['transport'].'</option>';
										}

									}
						echo'</select></td>
			          <td class="control-group"></td>
			        </tr>
			        <tr>
							<td><label for="infectionRisk" class="select">infection Risk:</label></td>
							<td><select name="infectionRisk" id="infectionRisk">
							<option value="">Please select</option>';
							$risk_dropDown =$this->drop_down->get_risk();
							$countRisk = count($risk_dropDown);
							if($countAction === 0) {
								echo 'FUCK IT DID NOT WORK';
							}else {
								for($e = 0; $e < $countRisk; $e++) {
										echo '<option value="'.$risk_dropDown[$e]['infection_risk_id']. '">'.$risk_dropDown[$e]['infection_risk'].'</option>';
									}
							}
			          echo '</selct></td>
								<td class="control-group"></td>
			        </tr>
							<tr>
							<td><label for="rae" class="select">RAE:</label></td>
							<td><input type="text" name="rae" id="rae" /></td>
			        <td class="control-group"></td>
							</tr>
							<tr>
							<td><label for="patientName" class="select">patients Name:</label></td>
							<td><input type="text" name="patientName" id="patientName" /></td>
			        <td class="control-group"></td>
							</tr>
			        <tr>
			        <td><label for="notes" class="select">Notes:</label></td>
							<td><input type="textarea" name="notes" id="notes" /></td>
			        </tr>
			        <tr>
							<td><label for="breachTime" class="select">Breach Time:</label></td>
							<td><input type="time" name="breachTime" id="breachTime" /></td>
			          <td class="control-group"></td>
			        </tr>
			        <tr>
							<td><label for="requested_by" class="select">Your Name:</label></td>
							<td><input type="text" name="requested_by" id="requested_by" /></td>
			        <td class="control-group"></td>
			        </tr>
			        <tr>
			          <td></td>
			          <td><button id="submit">Submit</button>
			            <button id="clear">Clear</button></td>
			          <td></td>
			        </tr>
			    </tbody>
			  </table>
			</form>
			</div><!--left-screen-split-->

			<div class="right-screen-split">

			<div class="column">
			  <div class="portlet">
			    <div  class="portlet-header"></div>
			    <div class="portlet-content"></div>
			  </div>
			</div>
			</div><!--right-screen-split-->';
		}
}else {
	echo 'FUCK DIDNT WORK!';
}
	}
}
