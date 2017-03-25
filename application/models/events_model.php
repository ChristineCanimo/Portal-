<?php

class Events_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

public function create_event($data){
		$id = $this->session->userdata('idnumber');
		$this->db->insert('event', $data);


		$query = $this->db->query("SELECT * FROM event ORDER BY event_id Desc LIMIT 1");
		
		foreach ($query->result_array() as $row)
		{
        	$attend = array(
        	'attend_id' => 'attend_id',
        	'attending' => '',
        	'notattending' => '',
        	'pending' => '2',
        	'event_id' => $row['event_id'],
        	'member_id' =>  $this->input->post('member_id')
			);
		}
		$this->db->insert('attend_events', $attend);
				
				
	}

	function countgrpevent($grp_id){
	   	$id = $this->session->userdata('idnumber');
		$query = $this->db->query('SELECT count(event_id) as nogrpevent from event where group_id = '.$grp_id.' ');
		return $query->result();
	}
public function create_event3($grp_id){
		$id = $this->session->userdata('idnumber');
		
		$query = $this->db->query("SELECT * FROM event JOIN members ON 'event.group_id=members.group_id' where 'members.idnumber'!=$id AND 'members.group_id'= $grp_id ORDER BY event_id Desc LIMIT 1");
		foreach ($query->result_array() as $row)
				{
					$grp=$row['group_id'];
					$event=$row['event_id'];
					$memid = $row['member_id'];
				
				$data = array(
		        	'attend_id' => 'attend_id',
		        	'attending' => '',
		        	'notattending' => '',
		        	'pending' => '2',
		        	'event_id' => $row['event_id'],
		        	'member_id' =>  $row['member_id']
		        	);

	        	$this->db->set($data);
				$this->db->insert($this->db->dbprefix . 'attend_events');
			}
}
public function create_event2($grp_id){
		$id = $this->session->userdata('idnumber');

		$this->db->where('idnumber', $id);
		$this->db->where('group_id', $grp_id);
	 	$this->db->delete('numberofevents');
	 	

		$this->db->join('event', 'members.group_id=event.group_id');
		$this->db->join('attend_events', 'event.member_id=attend_events.member_id AND event.event_id=attend_events.event_id');
        $this->db->where('members.idnumber',$id);
        $noofevents = $this->db->count_all_results('members');
		$data = array(
        'primarynum' => 'primarynum',
        'group_id' => $grp_id,
        'idnumber' => $id,
        'no_events' => $noofevents,
		);
		$this->db->insert('numberofevents', $data);

}

public function get_events2($grp_id){
		$id = $this->session->userdata('idnumber');
	 	$this->db->where('group_id', $grp_id);
        $this->db->from('numberofgrpevents');
        $query = $this->db->get();
        return $query->result();
}

public function get_events3(){
		$id = $this->session->userdata('idnumber');
		$query = $this->db->query("SELECT COUNT(event.event_id) as numevents FROM `members` JOIN event ON members.group_id=event.group_id WHERE members.idnumber = $id ");
		return $query->result();
}

public function get_events(){
		$id = $this->session->userdata('idnumber');
	 	$this->db->from('event');
	 	$this->db->join('members', 'event.group_id=members.group_id', 'members.idnumber', $id);
	 	$query = $this->db->get();
	 	if($query->num_rows() >0){
            return $query->result();
        }else{
            return $query->result();
 //           return false;
        }
}

public function events4group($grp_id){
		$id = $this->session->userdata('idnumber');
	 	$this->db->from('event');
	 	$this->db->join('members', 'event.group_id=members.group_id');
	 	$this->db->where('members.idnumber', $id);
	 	$this->db->where('event.group_id', $grp_id);
	 	$this->db->order_by('event_date','asc');
	 	$query = $this->db->get();
	 	return $query->result();
	 	}
public function attendevent(){
		$id = $this->session->userdata('idnumber');
		$this->db->select("*");
		$this->db->from('event');
		$query = $this->db->get();
		return $query->result();
}
public function events4profile(){
		$id = $this->session->userdata('idnumber');
	 	$this->db->from('members');
		$this->db->join('event', 'members.group_id=event.group_id');
		$this->db->where('members.idnumber', $id);
	 	$this->db->order_by('event_date','asc');
	 	$query = $this->db->get();
	 	return $query->result();
	 	}

public function events4profile2($userid){
	 	$this->db->from('members');
		$this->db->join('event', 'members.group_id=event.group_id');
		$this->db->join('attend_events', 'event.member_id=attend_events.member_id AND event.event_id=attend_events.event_id');
	 	$this->db->where('members.idnumber', $userid);
	 	$this->db->order_by('event_date','asc');
	 	$query = $this->db->get();
	 	return $query->result();
	 	}

function attend($evnt_id,$idn){
		$this->db->delete('attend_events', array('member_id' => $idn, 'event_id' => $evnt_id));
		$attend = array(
			'attend_id' => '' ,
			'attending' => 1,
			'notattending' => '',
			'pending' => '',
			'event_id' => $evnt_id,
			'member_id' => $idn
		);

		$this->db->insert('attend_events', $attend);
	}

	function notattend($evnt_id,$idn){
		$this->db->delete('attend_events', array('member_id' => $idn, 'event_id' => $evnt_id));
		$notattend = array(
			'attend_id' => '' ,
			'attending' => 0,
			'notattending' => '1',
			'pending' => '',
			'event_id' => $evnt_id,
			'member_id' => $idn
		);
		$this->db->insert('attend_events', $notattend);
	} 
	function pending($evnt_id,$idn){
		$this->db->delete('attend_events', array('member_id' => $idn, 'event_id' => $evnt_id));
		$notattend = array(
			'attend_id' => '' ,
			'attending' => '',
			'notattending' => '',
			'pending' => '2',
			'event_id' => $evnt_id,
			'member_id' => $idn
		);
		$this->db->insert('attend_events', $notattend);
	}        

public function get_members($grp_id){
		$id = $this->session->userdata('idnumber');
	 	$this->db->from('members');
	 	$this->db->where('group_id', $grp_id);
	 	$query = $this->db->get();
        return $query->result();
 //           return false;
        }
public function create_group($data){
		$id = $this->session->userdata('idnumber');
		$this->db->insert('groups', $data);
		
		$this->db->from('groups');
		$this->db->join('users', 'groups.idnumber=users.idnumber');
		$this->db->where('groups.idnumber', $id);
		$this->db->order_by('group_id', 'desc');
		$this->db->limit(1);
		$query=$this->db->get();

		foreach ($query->result_array() as $row)
		{
        $array = array(
        'member_id' => 'member_id',
        'group_id' => $row['group_id'],
        'idnumber' =>  $id,	
        'fname' => $row['fname'],
        'mname' => $row['mname'],
        'lname' => $row['lname'],
		);
    }	
    	$this->db->set($array);
		$this->db->insert($this->db->dbprefix . 'members');


		$this->db->select('*');
        $this->db->where('idnumber', $id);
        $noofgroup = $this->db->count_all_results('members');
        $this->db->set('no_groups', $noofgroup);  
		$this->db->where('group_id', $row['group_id']);  
		$this->db->update('numberofgroups');
	
}
public function create_group2($data){
		$id = $this->session->userdata('idnumber');
		$this->db->select('*');
        $this->db->where('idnumber',$id);
        $noofgroups = $this->db->count_all_results('members');
        $this->db->delete('numberofgroups', array('idnumber' => $id));

        $query = $this->db->query("SELECT `group_id`,`group_creator` FROM `groups` WHERE `idnumber`='$id' ORDER BY `group_id` DESC LIMIT 1");

		foreach ($query->result_array() as $row)
		{
		$data = array(
        'primarynum' => 'primarynum',
        'idnumber' => $id,
        'group_id' => $row['group_id'],
        'no_groups' => $noofgroups,
		);
	}
		$this->db->insert('numberofgroups', $data);
}

public function get_group2(){
		$id = $this->session->userdata('idnumber');
	 	$this->db->where('idnumber', $id);
        $this->db->from('numberofgroups');
        $query = $this->db->get();
        return $query->result();
}
public function get_group3($userid){
	 	$this->db->where('idnumber', $userid);
        $this->db->from('numberofgroups');
        $query = $this->db->get();
        return $query->result();
}
public function add_member($add,$grp_id){
	date_default_timezone_set("Asia/Manila");
	
		 $this->db->select('*');
		 $this->db->from('users');
		 $this->db->like('username',$add);
		 $this->db->or_like('fname',$add);
		 $this->db->or_like('lname',$add);
		 $this->db->or_like('mname',$add);
		 $this->db->or_like('fullname',$add);
		 $query = $this->db->get();

		 foreach ($query->result_array() as $row)
			{
				$memb = $row['idnumber'];
				}
		$error = 'The User Is Already a Member. Please Go Back';
		$query1 = $this->db->query("SELECT * FROM members WHERE idnumber ='$memb' AND group_id ='$grp_id'");
		$hehe = $query1->result_array();
     	if($hehe!=NULL){
     		echo $error; exit();	
     	} else {
     	foreach ($query->result_array() as $row)
			{
				$memb = $row['idnumber'];
				}
		$this->db->delete('members', array('idnumber' => $memb, 'group_id' => $grp_id));

		$id = $this->session->userdata('idnumber');

        foreach ($query->result_array() as $row)
        {
        $data2 = array(
                'notif_id' => 'notif_id',
                'idnumber' => $id,
                'to_whom' => $row['idnumber'],
                'stat_id' => '',
                'group_id' => $grp_id,
                'exstat_id' => '',
                'grpstat_id' => '',
                'type' => 'member',
                'datetime' => date("Y-m-d h:i:s")
                );
	}      
        $this->db->set($data2);
        $this->db->insert($this->db->dbprefix . 'notifs');

     	foreach ($query->result_array() as $row)
			{
			$add2 = array(
        	'member_id' => 'member_id',
        	'group_id' => $grp_id,
        	'idnumber' => $row['idnumber'],
        	'fname' => $row['fname'],  
        	'mname' => $row['mname'],
        	'lname' => $row['lname']
			);
			
			}
		$this->db->set($add2);
    	$this->db->insert($this->db->dbprefix . 'members');
		$this->db->select('group_id');
        $this->db->where('group_id', $grp_id);
        $noofmember = $this->db->count_all_results('members');
        $this->db->set('no_members', $noofmember);  
		$this->db->where('group_id', $grp_id);  
		$this->db->update('groups'); 

		$this->db->where('idnumber', $row['idnumber']);
		$this->db->delete('numberofgroups');
     	$nogroups = array(
     		'primarynum' => 'primarynum',
     		'idnumber' => $row['idnumber'],
     		'group_id' => $grp_id,
     		'no_groups' => '1'
     		);
     	$this->db->insert('numberofgroups', $nogroups);

		$this->db->select('*');
        $this->db->where('idnumber', $row['idnumber']);
        $noofgroup = $this->db->count_all_results('members');
        $this->db->set('no_groups', $noofgroup);  
		$this->db->where('group_id', $grp_id);  
		$this->db->update('numberofgroups');

		$this->db->where('idnumber', $row['idnumber']);
		$this->db->delete('numberofevents');
     	$noevents = array(
     		'primarynum' => 'primarynum',
     		'group_id' => $grp_id,
     		'idnumber' => $row['idnumber'],
     		'no_events' => '1'
     		);
     	$this->db->insert('numberofevents', $noevents);

		$this->db->select('*');
		$this->db->join('members', 'members.member_id=attend_events.member_id');
        $this->db->where('members.idnumber', $row['idnumber']);
        $noofevent = $this->db->count_all_results('attend_events');
        $this->db->set('no_events', $noofevent);  
		$this->db->where('idnumber', $row['idnumber']);  
		$this->db->update('numberofevents');
   		}   		
 }
public function add_attend(){
   		
			$query = $this->db->query("SELECT * FROM `event` JOIN members ORDER BY 'members.member_id' DESC");
			foreach ($query->result_array() as $row)
			{
				$evnt = $row['event_id'];
				$membr = $row['member_id'];

				$data2 = array(
	        	'attend_id' => 'attend_id',
	        	'attending' => '',
	        	'notattending' => '',
	        	'pending' => '2',
	        	'event_id' => $evnt,
	        	'member_id' =>  $membr
				);
			
				$this->db->set($data2);
		    	$this->db->insert($this->db->dbprefix . 'attend_events');
			}
}

public function get_group1(){ #GROUPLIST
		$id = $this->session->userdata('idnumber');
	 	$this->db->select('*');
	 	$this->db->where('members.idnumber', $id);
    	$this->db->from('groups');
    	$this->db->join('members', 'groups.group_id = members.group_id', 'left');
    	$this->db->order_by('groups.group_id', 'desc'); 
    	$query = $this->db->get();
    	return $query->result();
	 	
}
public function get_group4($userid){ #GROUPLIST all users
	 	$this->db->select('*');
	 	$this->db->where('members.idnumber', $userid);
    	$this->db->from('groups');
    	$this->db->join('members', 'groups.group_id = members.group_id', 'left');
    	$this->db->order_by('groups.group_id', 'desc'); 
    	$query = $this->db->get();
    	return $query->result();
	 	
}
public function get_nav(){ #nasa tabi ng profile picture
		$id = $this->session->userdata('idnumber');
	 	$this->db->order_by('group_id', 'desc');
		$this->db->limit(1);
	 	$this->db->from('groups');
        $query = $this->db->get();
        return $query->result();
}

public function specific_grp($grp_id){ #pipinduting group sa grouplist
		$id = $this->session->userdata('idnumber');
	 	$this->db->select('*');
	 	$this->db->where('members.idnumber', $id);
	 	$this->db->where('members.group_id', $grp_id);
    	$this->db->from('groups');
    	$this->db->join('members', 'groups.group_id = members.group_id', 'left');
    	$this->db->order_by('groups.group_id', 'DESC');
    	$this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
}
public function leavegrp($grp_id){
		$id = $this->session->userdata('idnumber');
		$this->db->where('idnumber', $id);
		$this->db->where('group_id', $grp_id);
	 	$this->db->delete('members');

	 	$this->db->select('group_id');
        $this->db->where('group_id', $grp_id);
        $noofmember = $this->db->count_all_results('members');
        $this->db->set('no_members', $noofmember);  
		$this->db->where('group_id', $grp_id);  
		$this->db->update('groups');

		$this->db->select('group_id');
        $this->db->where('idnumber', $id);
        $noofgroup = $this->db->count_all_results('members');
        $this->db->set('no_groups', $noofgroup);  
		$this->db->where('idnumber', $id);  
		$this->db->update('numberofgroups');

        $this->db->where('idnumber',$id);
        $noofevents = $this->db->count_all_results('members');
        $this->db->set('no_events', $noofevents);  
		$this->db->where('idnumber', $id);  
		$this->db->update('numberofevents');

		$this->db->delete('groups', array('no_members' => 0));
		$this->db->from('groups');
        $query = $this->db->get();
        return $query->result();
}
public function leave(){
		$id = $this->session->userdata('idnumber');
		$leave= $this->input->get('grouplist');

		echo $leave; exit();
	 	$this->db->delete('members', array('idnumber' => $id, 'group_name' => $leave));

	 	$this->db->select('group_id');
        $this->db->where('group_id', $grp_id);
        $noofmember = $this->db->count_all_results('members');
        $this->db->set('no_members', $noofmember);  
		$this->db->where('group_id', $grp_id);  
		$this->db->update('groups');

		$this->db->select('group_id');
        $this->db->where('idnumber', $id);
        $noofgroup = $this->db->count_all_results('members');
        $this->db->set('no_groups', $noofgroup);  
		$this->db->where('idnumber', $id);  
		$this->db->update('numberofgroups');

		$this->db->delete('groups', array('no_members' => 0));
		$this->db->from('groups');
        $query = $this->db->get();
        return $query->result();
}

}
	?>