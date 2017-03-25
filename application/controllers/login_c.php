<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 //we need to start session in order to access it through CI

class Login_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load database
		$this->load->model('users_model');
		}

	// Show login page
	public function index() 
	{
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			redirect ('index.php/home/home');
		}
		else{
			$this->load->view('login_v');
		}
	
	}

	// Show registration page
	public function registermo() {
	$this->load->view('studentregister');
	}

	
	// Validate and store registration data in database
	public function register_validation() {

	// Check validation for user input in SignUp form
	$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
	$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
	$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
	$this->form_validation->set_rules('address', 'Address', 'trim|required');
	$this->form_validation->set_rules('e_address', 'Email', 'trim|required');
	$this->form_validation->set_rules('contact', 'Contact', 'trim|required');
	$this->form_validation->set_rules('bday', 'Birthday', 'trim|required');
	if ($this->form_validation->run() == FALSE) {
	$this->load->view('studentregister');
	} else {
	$data = array(
	'username' => $this->input->post('username'),
	'password' => $this->input->post('password'),
	'fname' => $this->input->post('fname'),
	'mname' => $this->input->post('mname'),
	'lname' => $this->input->post('lname'),
	'gender' => $this->input->post('gender'),
	'address' => $this->input->post('address'),
	'emailadd' => $this->input->post('e_address'),
	'contact' => $this->input->post('contact'),
	'bday' => $this->input->post('bday'),
	'date_added' => $this->input->post('date_added'),
	'date_updated' => $this->input->post('date_updated'),

	);

	if($this->users_model->check_user_exists($data['username'])){
		$data['exist'] = "The username already exists";
		$this->load->view('usernameexist', $data);
	}else{
		$result = $this->users_model->registration_insert($data);
	if ($result == TRUE) {
	$this->load->view('success', $data);
	} else {
	echo 'Username already exist!';
	$this->load->view('usernameexist', $data);
	}
	}
	}
	}

	// Check for user login process

	
 	public function process(){

			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
			{
				echo "wrong password";
			}
		
		
		else
		{
			if ($this->input->post())
			{
				$this->load->model('users_model');				
				$data = $this->input->post();
				$this->users_model->login($data['username'], $data ['password']);
		
				$result=$this->users_model->login($data['username'], $data ['password']);
				
				if(!$result) {
					redirect ('index.php/login_c/incorrect');
				}
				
				else {
					$newdata = array(
			        'logged_in' => TRUE,
			        'idnumber' => $result['0']['idnumber']
					);
					$this->session->set_userdata($newdata);
					$this->users_model->history();
					redirect ('home/home');
				}
				
			}
		}
		
		
	}


	// Logout from admin page
	public function logout() {
	$this->session->unset_userdata('logged_in');
	// Removing session data
	$sess_array = array(
	'username' => ''
	);
	$this->users_model->history_out();
	$this->session->unset_userdata('login_v', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	redirect ('', $data);
	}
	public function balikmo()
	{
		redirect ('');
	}
	public function incorrect()
	{
		$this->load->view('xlogin');
	}
	
		public function unittesting(){
		$this->load->library('unit_test');
		$this->load->model('users_model');

		$username = 'tintin';
		$password = 'ten';
		$test_name = 'Login Success';
		$test_note = 'Test login function when input is correct';

		$result = $this->users_model->login($username, $password);

		echo $this->unit->run($result, 'is_array', $test_name, $test_note);
		
		$username = 'tintin';
		$password = 'tenasdf';
		$test_name = 'Login Failed';
		$test_note = 'Test login function when input is fail';

		$result = $this->users_model->login($username, $password);

		echo $this->unit->run($result, 'is_false', $test_name, $test_note);


		$username = 'tintin';
		$test_name = 'Get User Info';
		$test_note = 'Test read user info';

		$result = $this->users_model->read_user_information($username);

		echo $this->unit->run($result, 'is_array', $test_name, $test_note);

		$username = 'tintinasdfasdfa';
		$test_name = 'Get Wrong User Info';
		$test_note = 'Test read user info';

		$result = $this->users_model->read_user_information($username);

		echo $this->unit->run($result, 'is_false', $test_name, $test_note);
	}

}
