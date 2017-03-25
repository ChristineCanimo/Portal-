<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //we need to call PHP's session object to access it through CI
class Hidden extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }

 public function index()
 {
 	$this->load->model('users_model');
	$this->data['details'] = $this->users_model->UserInfo();
	$this->data['bruh'] = $this->users_model->user_history();
	$this->load->view('studentdatabase', $this->data);

 }
}