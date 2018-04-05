<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DashboardLAID extends CI_Controller {
private $permission = array();
    public function __construct()
{
	parent::__construct();
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()
	$this->load->model('Ligalaid_model');
	$this->load->model('Parasys_model');
	$this->load->library('form_validation');
	$this->load->helper('security');
	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
	}

	
	$this->load->model('Authorisation_model');
	$this->permission = $this->Authorisation_model->get_permIDs_by_user($_SESSION['logged_in']['id']);
	
	if(!$this->Authorisation_model->is_legal($this->permission)){	
		exit('Permission Denied!');
	}

}

public function fetchAllLAID(){
	$LAIDData = $this->Ligalaid_model->get_all_ligal();
		$result = array('data'=>array());
		//$x=1;
		foreach ($LAIDData as $key => $value) {

			$actionclient = '<!-- Single button -->
			<button class="btn btn-warning btn-xs"  onclick="get_clientforUpdate('. $value['ligalaidid'] .')"><i class="glyphicon glyphicon-pencil"></i></button>
			<button class="btn btn-danger btn-xs" onclick="delete_book('. $value['ligalaidid'] .')"><i class="glyphicon glyphicon-remove"></i></button>
			<button class="btn btn-danger btn-xs" onclick="delete_book('. $value['ligalaidid'] .')"><i class="glyphicon glyphicon-random"></i></button>
			';
			$result['data'][$key] = array(
					//$x,
					$value['ligalaidid'],
					$value['ligalcode'],
					$value['project'],
					$value['casename'],
					$value['courtname'],
					$value['issuename'],
					$value['dateenter'],
					$value['datereceive'],
					$value['datecreate'],
					$value['ligalaidnote'],
					$actionclient
				);
				//$x++;
		}/// foreach
	
		echo json_encode($result);
}
public function dashboardlaid()
	{
		$this->load->model('Lawyers_model');
		$this->load->model('Parasys_model');
		$this->load->model('Council_decision_model');
		$data['cases'] = $this->Parasys_model->fetchCasePara();
		$data['courts']= $this->Parasys_model->fetchCourt();
		$data['issues']= $this->Parasys_model->fetchIssue();
		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		$data['lawyers'] = $this->Lawyers_model->get_data();
		$data['council_decision'] = $this->Council_decision_model->get_data();
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/dashboardlaid.php');
		$this->load->view('html/admin/templates/footer');		
		
	}


}
	


?>