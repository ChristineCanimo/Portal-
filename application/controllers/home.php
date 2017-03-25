<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }

 	public function accsetting() 
 	{	
 		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			$this->load->model('users_model');
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->load->view('accsetting', $this->data);

		}
		else{
			$this->load->view('login_v');
		}
 	
	}

	public function index()
	{	
		$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$comment = current_url();
			$params = $this->uri->segment(3);
			$fullurl = $comment . '?' . $params;
			$this->load->helper('smiley');
            $this->load->library('table');

            $image_array = get_clickable_smileys('http://localhost/efg/images/smileys', 'status');
            $col_array = $this->table->make_columns($image_array, 8);

            $image_array2 = get_clickable_smileys('http://localhost/efg/images/smileys', $comment);
            $col_array2 = $this->table->make_columns($image_array2, 8);
            $this->data['smiley_table1'] = $this->table->generate($col_array);
            $this->data['smiley_tables'] = $this->table->generate($col_array2);
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model'); 
			$this->load->model('notifs_model');
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['status'] = $this->post_model->get_post();
			$this->data['posts'] = $this->post_model->get_post2();
			$this->data['comments'] = $this->post_model->get_comment();
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['grpnumbers'] = $this->events_model->get_group2();
			$this->data['searchstatus'] = $this->post_model->get_searchedprofile();
			$this->data['getcomments'] = $this->post_model->get_comment();
			$this->data['groups'] = $this->events_model->get_group1();
			$this->data['users'] = $this->users_model->users();
			$this->data['events'] = $this->events_model->events4profile();
			$this->data['eventnumbers'] = $this->events_model->get_events3();
			$this->data['attends'] = $this->events_model->attendevent();
			$this->data['attend'] = 'Will';
			$this->data['notattend'] = 'Sorry';
			$this->load->view('profile1', $this->data);
					
		}
		else{
			
			$this->load->view('login_v');
		}
	}
	public function profile($userid=' ')
	{	
		$li = $this->session->userdata('logged_in');
		$id = $this->input->get($userid);
		if($li == TRUE){
			$comment = current_url();
			$params = $this->uri->segment(3);
			$fullurl = $comment . '?' . $params;
			$this->load->helper('smiley');
            $this->load->library('table');

            $image_array = get_clickable_smileys('http://localhost/efg/images/smileys', 'status');
            $col_array = $this->table->make_columns($image_array, 8);

            $image_array2 = get_clickable_smileys('http://localhost/efg/images/smileys', $comment);
            $col_array2 = $this->table->make_columns($image_array2, 8);
            $this->data['smiley_table1'] = $this->table->generate($col_array);
            $this->data['smiley_tables'] = $this->table->generate($col_array2);
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model'); 
			$this->load->model('notifs_model');
			$this->data['details'] = $this->users_model->getUserInfo2($userid);
			$this->data['searchdetails'] = $this->users_model->getUserInfo();
			$this->data['origs'] = $this->users_model->getUserInfo();
			$this->data['status'] = $this->post_model->get_post3($userid);
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['searchedstatus'] = $this->post_model->get_allsearched($userid);
			$this->data['searchstatus'] = $this->post_model->get_searchedprofile($userid);
			$this->data['posts'] = $this->post_model->get_post4($userid);
			$this->data['comments'] = $this->post_model->get_comment2($userid);
			$this->data['grpnumbers'] = $this->events_model->get_group3($userid);
			$this->data['eventnumbers'] = $this->events_model->get_events3();
			$this->data['groups'] = $this->events_model->get_group4($userid);
			$this->data['users'] = $this->users_model->users2($userid);
			$this->data['events'] = $this->events_model->events4profile2($userid);
			$this->data['attends'] = $this->events_model->attendevent();
			$this->data['attend'] = 'Will';
			$this->data['notattend'] = 'Sorry';
			$this->load->view('searchedprofile', $this->data);
					
		}
		else{
			
			$this->load->view('login_v');
		}
	}
	public function home(){
			$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$comment = current_url();
			$params = $this->uri->segment(3);
			$fullurl = $comment . '?' . $params;
			$this->load->helper('smiley');
            $this->load->library('table');

            $image_array = get_clickable_smileys('http://localhost/efg/images/smileys', 'status');
            $col_array = $this->table->make_columns($image_array, 8);

            $image_array2 = get_clickable_smileys('http://localhost/efg/images/smileys', $comment);
            $col_array2 = $this->table->make_columns($image_array2, 8);
            $this->data['smiley_table1'] = $this->table->generate($col_array);
            $this->data['smiley_tables'] = $this->table->generate($col_array2);
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model'); 
			$this->load->model('notifs_model'); 
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['status'] = $this->post_model->get_allpost();
			$this->data['posts'] = $this->post_model->get_post2();
			$this->data['comments'] = $this->post_model->get_comment();
			$this->data['grpnumbers'] = $this->events_model->get_group2();
			$this->data['groups'] = $this->events_model->get_group1();
			$this->data['users'] = $this->users_model->users();
			$this->data['events'] = $this->events_model->events4profile();
			$this->data['eventnumbers'] = $this->events_model->get_events3();
			$this->data['attends'] = $this->events_model->attendevent();
			$this->data['attend'] = 'Will';
			$this->data['notattend'] = 'Sorry';
			$this->load->view('home', $this->data);
					
		}
		else{
			
			$this->load->view('login_v');
		}	
	}

	public function group($grp_id = '') {
		
		$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model');
			$this->load->model('notifs_model');
			$this->data['countfiles'] = $this->notifs_model->file();
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['nogrpevents'] = $this->events_model->countgrpevent($grp_id);
			$this->data['membdetails'] = $this->users_model->grpmembers($grp_id);
			$this->data['idmembers'] = $this->users_model->memberid($grp_id);
			$this->data['grpstatus'] = $this->post_model->get_grpstatus($grp_id);
			$this->data['events'] = $this->events_model->events4group($grp_id);
			$this->data['members'] = $this->users_model->members();
			$this->data['grpmembers'] = $this->events_model->get_members($grp_id);
			$this->data['eventnumbers'] = $this->events_model->get_events2($grp_id);
			$this->data['get_grppost'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['comments'] = $this->post_model->get_comment4();
			$this->data['lists'] = $this->post_model->get_li();
			$this->data['comment_members'] = $this->post_model->comment_members($grp_id);
			$this->data['navs'] = $this->events_model->get_nav();
			$this->data['groups'] = $this->events_model->get_group1();
			$this->data['names'] = $this->events_model->specific_grp($grp_id);
			$this->data['message'] = 'Already a member of this group!';
			$this->load->view('group_v', $this->data);
		}
		else {
			redirect('home/index');
		}
	}

		public function notifgroup($grp_id = '') {
		
		$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model');
			$this->load->model('notifs_model');
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['grpstatus'] = $this->post_model->get_grpstatus($grp_id);
			$this->data['events'] = $this->events_model->events4group($grp_id);
			$this->data['nogrpevents'] = $this->events_model->countgrpevent($grp_id);
			$this->data['members'] = $this->users_model->members();
			$this->data['grpmembers'] = $this->events_model->get_members($grp_id);
			$this->data['eventnumbers'] = $this->events_model->get_events2($grp_id);
			$this->data['get_grppost'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['countfiles'] = $this->notifs_model->file();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['idmembers'] = $this->users_model->memberid($grp_id);
			$this->data['comments'] = $this->post_model->get_comment4();
			$this->data['lists'] = $this->post_model->get_li();
			$this->data['users'] = $this->users_model->users();
			$this->data['navs'] = $this->events_model->get_nav();
			$this->data['groups'] = $this->events_model->get_group1();
			$this->data['names'] = $this->events_model->specific_grp($grp_id);
			$this->data['message'] = 'Already a member of this group!';
			$this->load->view('notif_grppost', $this->data);
		}
		else {
			redirect('home/index');
		}
	}

	public function members($grp_id = '') {
		
		$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model');
			$this->load->model('notifs_model');
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['grpstatus'] = $this->post_model->get_grpstatus($grp_id);
			$this->data['events'] = $this->events_model->events4group($grp_id);
			$this->data['nogrpevents'] = $this->events_model->countgrpevent($grp_id);
			$this->data['members'] = $this->users_model->members();
			$this->data['grpmembers'] = $this->events_model->get_members($grp_id);
			$this->data['eventnumbers'] = $this->events_model->get_events2($grp_id);
			$this->data['get_grppost'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countfiles'] = $this->notifs_model->file();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['lists'] = $this->post_model->get_li();
			$this->data['users'] = $this->users_model->users();
			$this->data['navs'] = $this->events_model->get_nav();
			$this->data['groups'] = $this->events_model->get_group1();
			$this->data['names'] = $this->events_model->specific_grp($grp_id);
			$this->data['message'] = 'Already a member of this group!';
			$this->load->view('grpmembers', $this->data);
		}
		else {
			redirect('home/index');
		}
	}
	public function addedmember($grp_id = '') {
		
		$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model');
			$this->load->model('notifs_model');
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['idmembers'] = $this->users_model->memberid($grp_id);
			$this->data['grpstatus'] = $this->post_model->get_grpstatus($grp_id);
			$this->data['events'] = $this->events_model->events4group($grp_id);
			$this->data['nogrpevents'] = $this->events_model->countgrpevent($grp_id);
			$this->data['get_grppost'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['countfiles'] = $this->notifs_model->file();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['members'] = $this->users_model->members();
			$this->data['lists'] = $this->post_model->get_li();
			$this->data['users'] = $this->users_model->users();
			$this->data['navs'] = $this->events_model->get_nav();
			$this->data['groups'] = $this->events_model->get_group1();
			$this->data['names'] = $this->events_model->specific_grp($grp_id);
			$this->data['message'] = 'Already a member of this group!';
			$this->load->view('group_v', $this->data);
		}
		else {
			redirect('home/index');
		}
	}

		public function post_commented($commented = ' '){
			$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$comment = current_url();
			$params = $this->uri->segment(3);
			$fullurl = $comment . '?' . $params;
			$this->load->helper('smiley');
            $this->load->library('table');

            $image_array = get_clickable_smileys('http://localhost/efg/images/smileys', 'status');
            $col_array = $this->table->make_columns($image_array, 8);

            $image_array2 = get_clickable_smileys('http://localhost/efg/images/smileys', $comment);
            $col_array2 = $this->table->make_columns($image_array2, 8);
            $this->data['smiley_table1'] = $this->table->generate($col_array);
            $this->data['smiley_tables'] = $this->table->generate($col_array2);
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model'); 
			$this->load->model('notifs_model'); 
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['notifdetails'] = $this->notifs_model->getdetails2($commented);
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['status'] = $this->post_model->get_allpost();
			$this->data['statusnoti'] = $this->post_model->get_postnoti($commented);
			$this->data['posts'] = $this->post_model->get_post2();
			$this->data['comments'] = $this->post_model->get_comment();
			$this->data['grpnumbers'] = $this->events_model->get_group2();
			$this->data['groups'] = $this->events_model->get_group1();
			$this->data['users'] = $this->users_model->users();
			$this->data['events'] = $this->events_model->events4profile();
			$this->data['eventnumbers'] = $this->events_model->get_events3();
			$this->data['attends'] = $this->events_model->attendevent();
			$this->data['attend'] = 'Will';
			$this->data['notattend'] = 'Sorry';
			$this->load->view('post_commented', $this->data);
					
		}
		else{
			
			$this->load->view('login_v');
		}	
	}
	 public function smiley()
        {
                $this->load->helper('smiley');
                $this->load->library('table');

                $image_array = get_clickable_smileys('<?php echo base_url()?>smileys/images', 'comments');
                $col_array = $this->table->make_columns($image_array, 8);

                $data['smiley_table'] = $this->table->generate($col_array);
                $this->load->view('smiley_view', $data);
        }

	public function create_event($grp_id = ''){
		$id = $this->session->userdata('idnumber');
		$this->load->model('events_model');
			
			if($this->input->post()) {	
			$data = array(
        	'event_id' => $this->input->post('event_id'),
        	'group_id' => $this->input->post('group_id'),
        	'member_id' => $this->input->post('member_id'),
        	'idnumber' => $id,
        	'event_creator' => $this->input->post('event_creator'),
        	'event_name' => $this->input->post('event_name'),
        	'event_place' => $this->input->post('event_place'),
        	'event_date' => $this->input->post('event_date'),
        	'group_name' => $this->input->post('group_name'),
        	);

    		}
			$result = $this->events_model->create_event($data);
			$result = $this->events_model->create_event2($grp_id);
			$result = $this->events_model->create_event3($grp_id);
			redirect('home/group/'.$grp_id);
	}
	public function attend(){
		$this->load->model('events_model');
				if($this->input->get()){
				$evnt_id = $this->input->get('evnt_id');
				$idn = $this->input->get('idn');
				$rd = "home/index#attending".$evnt_id;
				$result = $this->events_model->attend($evnt_id,$idn);
				redirect($rd);
				}
	}
	public function notattend(){
		$this->load->model('events_model');
				if($this->input->get()){
				$evnt_id = $this->input->get('evnt_id');
				$idn = $this->input->get('idn');
				$rd = "home/index#notattending".$evnt_id;
				$result = $this->events_model->notattend($evnt_id,$idn);
				redirect($rd);
				}
	}
	public function pending(){
		$this->load->model('events_model');
				if($this->input->get()){
				$evnt_id = $this->input->get('evnt_id');
				$idn = $this->input->get('idn');
				$rd = "home/index#notattending".$evnt_id;
				$result = $this->events_model->pending($evnt_id,$idn);
				redirect($rd);
				}
	}
	public function upload()
	{	
		$dp = $this->input->post('dp');
		$id = $this->session->userdata('idnumber');
		$config['upload_path'] = './images/';
		$config['file_name'] = $dp;
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = 'jpg';


		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			exit;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$this->load->model('users_model');
    
			$data = array(
			'img_id' => null,
			'idnumber' => $id,
			'image_name' => $config['file_name'] ,
			'image_path' =>	$config['upload_path'],
			);
			$result = $this->users_model->profilepic($data);
			redirect ('home/index');
		
		}
	}
	public function uploadcover()
	{	
		$cp = $this->input->post('cp');
		$id = $this->session->userdata('idnumber');
		$config['upload_path'] = './images/';
		$config['file_name'] = $cp;
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = 'jpg';
		

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			exit;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$this->load->model('users_model');
    
			$data = array(
			'cover#' => null,
			'idnumber' => $id,
			'image_name' => $config['file_name'] ,
			'image_path' =>	$config['upload_path'],
			);
			$result = $this->users_model->coverpic($data);
			redirect ('home/index');
		
		}
	}
		public function upload_file($grp_id){
			date_default_timezone_set("Asia/Manila");
    $gf = $this->input->post('gf');
	$id = $this->session->userdata('idnumber');
	$config['upload_path'] = './document/';
	$config['file_name'] = $gf;
	$config['overwrite'] = TRUE;
	$config['allowed_types'] = 'pdf|doc|docx|xml|txt';


	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload())
	{
		$error = array('error' => $this->upload->display_errors());
		print_r($error);
		exit;
	}
	else
	{
		$data = array('upload_data' => $this->upload->data());

		$this->load->model('users_model');

		$data = array(
		'file' => null,
		'idnumber' => $id,
		'document_name' => $config['file_name'] ,
		'document_path' =>	$config['upload_path'],
		'group_id' => $grp_id,
		'date_upload' => date("Y-m-d h:i:s")
    	);
		$result = $this->users_model->do_file($data);
		redirect ('home/files/'.$grp_id);
}
}
	
	
	public function logoutconfirm()
	{
		$this->load->view('confirmlogout');
	}

	public function files($grp_id) {
		$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model');
			$this->load->model('notifs_model');
			$this->load->model('file');
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['document'] = $this->file->getRows($grp_id);
			$this->data['getfiles'] = $this->users_model->getfile($grp_id);
			$this->data['grpstatus'] = $this->post_model->get_grpstatus($grp_id);
			$this->data['events'] = $this->events_model->events4group($grp_id);
			$this->data['nogrpevents'] = $this->events_model->countgrpevent($grp_id);
			$this->data['members'] = $this->users_model->members();
			$this->data['grpmembers'] = $this->events_model->get_members($grp_id);
			$this->data['eventnumbers'] = $this->events_model->get_events2($grp_id);
			$this->data['get_grppost'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost($grp_id);
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['notifdetails'] = $this->notifs_model->getdetails();
			$this->data['notifgrpdetails'] = $this->notifs_model->getgrpdetails();
			$this->data['countnotifs'] = $this->notifs_model->countNotifs();
			$this->data['sorts'] = $this->notifs_model->sort();
			$this->data['cntnotifs'] = $this->notifs_model->countNotifs2();
			$this->data['getgroups'] = $this->notifs_model->get_group1();
			$this->data['countfiles'] = $this->notifs_model->file();
			$this->data['getposts'] = $this->notifs_model->get_post();
			$this->data['get_grpposts'] = $this->notifs_model->getgrppost2();
			$this->data['getgrpcomments'] = $this->notifs_model->get_grpcomment();
			$this->data['getcomments'] = $this->notifs_model->get_comment();
			$this->data['lists'] = $this->post_model->get_li();
			$this->data['users'] = $this->users_model->users();
			$this->data['navs'] = $this->events_model->get_nav();
			$this->data['groups'] = $this->events_model->get_group1();
			$this->data['names'] = $this->events_model->specific_grp($grp_id);
			$this->data['message'] = 'Already a member of this group!';
			$this->load->view('grpfiles', $this->data);
		}
		else {
			redirect('home/index');
		}
	}
	
		

	public function friends() {
		$this->load->model('users_model');
		$this->data['users'] =  $this->users_model->search();
		$this->load->view('search', $this->data);
	}
	public function aboutie() {
		$this->load->view('about');
	}

	public function edit() {
		$li = $this->session->userdata('logged_in');
		$id = $this->session->userdata('idnumber');
		if($li == TRUE){
			$this->load->model('users_model');
			$this->load->model('post_model');
			$this->load->model('events_model');
			$this->data['details'] = $this->users_model->getUserInfo();
			$this->data['status'] = $this->post_model->get_post();
			$this->data['events'] = $this->events_model->get_events();
			$this->data['posts'] = $this->post_model->get_post2();
			$this->load->view('editprof_v', $this->data);
		}
		else{
			
			$this->load->view('login_v');
		}
		
	}
	public function grpmembers() {
		$this->load->view('grpmembers_v');
	}
	public function logout() {
		redirect('login_c/logout');
	}
	public function grpfiles() {
		$this->load->view('grpfiles_v');
	}
	public function commentprofile($userid){
		$this->load->model('post_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->post_model->post_comment($data);
			redirect('home/profile/'.$userid);
		}
	}
	public function comment(){
		$this->load->model('post_model');

		if($this->input->post()) {
			$data = $this->input->post();	
	        $id = $this->session->userdata('idnumber');
	        $statid = $this->input->post('status_id');
			
			$this->db->select('*');
        	$this->db->from('comments');
        	$this->db->where('status_id', $statid);
        	$this->db->where('idnumber !=', $id);
        	$query = $this->db->get();

        	$haha = $query->result();
        	if($haha ==0){

			$result = $this->post_model->post_comment($data);
			redirect('home/home');
			}
			else{
			$result = $this->post_model->post_comment($data);
			$result = $this->post_model->post_comment2();
			redirect('home/home');
		}
	}
}
	public function commentgrp($grp_id){
		$this->load->model('post_model');
			
			if($this->input->post()) {

			$data = $this->input->post();	

			$result = $this->post_model->post_grpcomment($data,$grp_id);
			redirect('home/group/'.$grp_id);
		}
	}
	public function comments($commented){
		$this->load->model('post_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->post_model->post_comments($data,$commented);
			redirect('home/post_commented/'.$commented);
		}
	}


	public function status2(){
		$this->load->model('post_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->post_model->post_status($data);
			$result = $this->post_model->post_status2($data);
			redirect('home/home');
		}
	}
	public function status(){
		$this->load->model('post_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->post_model->post_status($data);
			$result = $this->post_model->post_status2($data);
			redirect('home/index');
		}
	}
	public function searchedstatus($userid = ' '){
		$this->load->model('post_model');
			
			if($this->input->post()) {
			$data = array(
					'userprofile_id' => $userid,
					'exstat_id' => 'exstat_id',
					'poster_id' => $this->input->post('poster_id'),
					'post_date' => $this->input->post('post_date'),
					'post_time' => $this->input->post('post_date'),
					'text' => $this->input->post('text')
				);

			$result = $this->post_model->post_searchedprofile($data,$userid);
			redirect('home/profile/'.$userid);
		}
	}	
	public function search()
  {
  $li = $this->session->userdata('logged_in');
  $id = $this->session->userdata('idnumber');
  if($li == TRUE){
  	$this->load->model('users_model');
  	$this->load->helper('smiley');
            $this->load->library('table');

            $image_array = get_clickable_smileys('http://localhost/efg/images/smileys', 'status');
            $col_array = $this->table->make_columns($image_array, 8);

            $image_array2 = get_clickable_smileys('http://localhost/efg/images/smileys', 'status');
            $col_array2 = $this->table->make_columns($image_array2, 8);
            $this->data['smiley_table1'] = $this->table->generate($col_array);
            $this->data['smiley_tables'] = $this->table->generate($col_array2);
			
			if($this->input->post()) {
				$search = $this->input->post('search');
   				$memb = $this->users_model->search($search);
   				$usersearch =  $this->users_model->search($search);
   				$grpsearch =  $this->users_model->searchgrp($search);

   				redirect ('home/profile/'.$memb);
 }
 }}


	public function creategroup(){

		$id = $this->session->userdata('idnumber');
		$this->load->model('events_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	
			
			
			$result = $this->events_model->create_group($data);
			$result = $this->events_model->create_group2($data);
			redirect('home/index');
		}
	}	
	public function addmem($grp_id= ''){
		$this->load->model('events_model');
			
			if($this->input->post()) {
			$add = $this->input->post('name');

			$result = $this->events_model->add_member($add,$grp_id);
			}
			$query2 = $this->db->query("SELECT * FROM `event`");
   			if($query2->result_array() >= 1){

			$result = $this->events_model->add_attend();

   			}
   			redirect('home/group/'.$grp_id);
	}
	
	public function grpstatus($grp_id = ''){
		$this->load->model('post_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	

			$result = $this->post_model->grp_status($data,$grp_id);
			$result = $this->post_model->get_grpstatus($grp_id);
			redirect('home/group/'.$grp_id);
		}
	}
	public function leavegrp($grp_id= ''){
		$this->load->model('events_model');
		$this->data['leaves'] =  $this->events_model->leavegrp($grp_id);
		redirect('home/index', $this->data);
	}
	public function leave($grp_id){
		$this->load->model('events_model');

		$this->events_model->leave();
		redirect('home/index', $this->data);
		
	}
	public function download($grp_id= '',$file){
    $this->load->model('file');
	if(!empty($file)){
	// load download helper
	$this->load->helper('download');

	$fileInfo = $this->file->getRows(array('file'=>$file),$grp_id);
	//file path
	$filedl = 'document'.$fileInfo['document_name'];
}
	//download file
	force_download($filedl, NULL);
	}


}
