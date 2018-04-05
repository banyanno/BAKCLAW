<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper(array('form'));
    }


	public function index()
	{
		$this->load->view('html/login');
	}
}
