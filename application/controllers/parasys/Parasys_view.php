<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Parasys_view extends CI_Controller {
private $permission = array();
    public function __construct()
{
	parent::__construct();
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()
	$this->load->model('Parasys_model');
	$this->load->model('Lawyers_model');
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


public function create_client()
	{
	   $validator = array('success' => false, 'messages' => array());

		$validate_data = array(
			array(
				'field' => 'clientsex',
				'label' => 'Client Sex',
				'rules' => 'required'
			),
			array(
				'field' => 'clientname',
				'label' => 'Client Name',
				'rules' => 'required'
			)
			
		);
		
		$this->form_validation->set_rules($validate_data);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');


		//if ($this->input->post('clientname') && $this->input->post('clientsex') && $this->input->post('clientage') )
		if($this->form_validation->run() === true) 
        {
            $data = array();
            $data['CLIENT_NAME'] =$this->input->post('clientname');
            $data['CLIENT_SEX']=$this->input->post('clientsex');
			$data['CLIENT_AGE']=$this->input->post('clientage');
			$data['CLIENT_TEL']=$this->input->post('clienttel');
			$data['CLIENT_ADD']=$this->input->post('clientaddress');
			$data['CLIENT_NAT_ID']=$this->input->post('clientidcard');
            //$data['message'] = "posted successfully!";	
			//$this->Parasys_model->insertClient($data);
			//echo json_encode ($this->Parasys_model->insertClient($data));
			//error_log(json_encode($data),3,"yano.log");
			$insertstatus = $this->Parasys_model->insertClient($data);
			if ($insertstatus===true){
				$validator['success'] = true;
				$validator['messages'] = "Successfully added";
			}else {
				$validator['success'] = false;
				$validator['messages'] = "Error while inserting the information into the database";
				
			}
			//echo json_encode($data);

			//if ($insertstatus){
				//echo "Success";
			//}
		}else {
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
			}			
		} // /else

		//echo 'Insert successfull';
		echo json_encode($validator);
		
	}
public function cleint_update($clientid){
	 //echo $clientid;
		$validator = array('success' => false, 'messages' => array());
		/*$data = array(
				'book_isbn' => $this->input->post('book_isbn'),
				'book_title' => $this->input->post('book_title'),
				'book_author' => $this->input->post('book_author'),
				'book_category' => $this->input->post('book_category'),
			);
		$this->Parasys_model->client_update(array('book_id' => $this->input->post('book_id')), $data);
		echo json_encode(array("status" => TRUE));*/

		$update = $this->Parasys_model->client_update($clientid);
		
		if ($update==1){
			$validator['success'] = true;
			$validator['messages'] = "Successfully update";
		
		}else{
			$validator['success'] = false;
			$validator['messages'] = "Error while inserting the information into the database";
		}
	
		echo json_encode($validator);
	}
public function ajax_edit_client($id){
			$dataclient = $this->Parasys_model->get_by_id($id);
			echo json_encode($dataclient);
}

public function view_dashboard_client()
	{

		$datacleint['clients'] = $this->Parasys_model->get_all_client();
		$datacleint['lawyers'] = $this->Lawyers_model->get_data();
		$datacase['cases']	   = $this->Parasys_model->fetchCasePara();
		$this->load->model('Lawyers_model');
		$this->load->model('Council_decision_model');
		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		
		$data['council_decision'] = $this->Council_decision_model->get_data();
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/parasys/client_dashboard',$datacleint);
		$this->load->view('html/admin/templates/footer');		
		
	}
public function fetchClassData(){
	
		$clientData = $this->Parasys_model->get_all_client();
		$result = array('data'=>array());
		//$x=1;
		foreach ($clientData as $key => $value) {

			$actionclient = '<!-- Single button -->
			<button class="btn btn-warning btn-xs"  onclick="get_clientforUpdate('. $value['CLIENT_ID'] .')"><i class="glyphicon glyphicon-pencil"></i></button>
			<button class="btn btn-danger btn-xs" onclick="delete_book('. $value['CLIENT_ID'] .')"><i class="glyphicon glyphicon-remove"></i></button>
			<button class="btn btn-danger btn-xs" onclick="delete_book('. $value['CLIENT_ID'] .')"><i class="glyphicon glyphicon-random"></i></button>
			';
			$result['data'][$key] = array(
					//$x,
					$value['CLIENT_ID'],
					$value['CLIENT_NAME'],
					$value['CLIENT_SEX'],
					$value['CLIENT_AGE'],
					$value['CLIENT_NAT_ID'],
					$value['CLIENT_TEL'],
					$value['CLIENT_ADD'],
					$actionclient
				);
				//$x++;
		}/// foreach
	
		echo json_encode($result);
}

}
	


?>