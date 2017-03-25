<?php

class notifs_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

public function getdetails(){
	$id = $this->session->userdata('idnumber');
	$this->db->from('notifs');
	$this->db->join('users', 'notifs.idnumber=users.idnumber');
	$this->db->where('notifs.to_whom', $id);
	$this->db->where('notifs.idnumber !=', $id);
	$this->db->order_by('datetime', 'DESC');
	$query = $this->db->get();
	return $query->result();
}
public function getgrpdetails(){
	$id = $this->session->userdata('idnumber');
	$this->db->from('grpnotifs');
	$this->db->join('members','grpnotifs.idnumber=members.idnumber AND grpnotifs.group_id=members.group_id');
	$this->db->where('grpnotifs.idnumber !=', $id);
	$this->db->where('grpnotifs.to_whom', $id);
	$this->db->order_by('grpnotifs.datetime', 'DESC');
	$query = $this->db->get();
	return $query->result();
}
public function getdetails3(){
	$id = $this->session->userdata('idnumber');
	$this->db->from('notifsmember');
	$this->db->join('users', 'notifsmember.idnumber=users.idnumber');
	$this->db->where('notifsmember.to_whom', $id);
	$this->db->where('notifsmember.idnumber !=', $id);
	$this->db->order_by('datetime', 'DESC');
	$query = $this->db->get();
	return $query->result();
}
public function get_group1(){ #GROUPLIST
		$id = $this->session->userdata('idnumber');
	 	$this->db->select('*');
	 	$this->db->from('notifs');
		$this->db->join('groups', 'notifs.group_id=groups.group_id');
		$this->db->where('notifs.to_whom', $id);
    	$query = $this->db->get();
    	return $query->result();
	 	
}

public function get_comment(){ 
		$id = $this->session->userdata('idnumber');
	 	$this->db->select('*');
	 	$this->db->from('notifs');
		$this->db->join('status', 'notifs.stat_id=status.stat_id');
		$this->db->join('comments', 'status.stat_id=comments.status_id');
		$this->db->where('notifs.to_whom', $id);
		$this->db->where('notifs.idnumber !=', $id);
    	$query = $this->db->get();
    	return $query->result();
	 	
}

public function get_grpcomment(){ 
		$id = $this->session->userdata('idnumber');
	 	$this->db->select('*');
	 	$this->db->from('grpnotifs');
	 	$this->db->join('groups','grpnotifs.group_id=groups.group_id');
		$this->db->join('grpstatus', 'grpnotifs.grpstat_id=grpstatus.grpstat_id');
		$this->db->join('grp_comments', 'grpstatus.grpstat_id=grp_comments.grpstat_id');
		$this->db->where('grpnotifs.to_whom', $id);
		$this->db->where('grpnotifs.idnumber !=', $id);
    	$query = $this->db->get();
    	return $query->result();
	 	
}
public function get_post(){ 
		$id = $this->session->userdata('idnumber');
	 	$this->db->select('*');
	 	$this->db->from('notifs');
		$this->db->join('exclusivestatus', 'notifs.exstat_id=exclusivestatus.exstat_id');
		$this->db->where('notifs.to_whom', $id);
		$this->db->where('notifs.idnumber !=', $id);
    	$query = $this->db->get();
    	return $query->result();
	 	
}
public function getname(){
	$id = $this->session->userdata('idnumber');
	$this->db->from('notifs');
	$this->db->join('users', 'notifs.to_whom=users.idnumber');
	$this->db->where('notifs.idnumber !=', $id);
	$query = $this->db->get();
	return $query->result();

}

public function getpost(){
	$id = $this->session->userdata('idnumber');
	$this->db->from('notifs');
	$this->db->join('status', 'notifs.to_whom=status.idnumber');
	$this->db->join('comments', 'status.stat_id=comments.status_id');
	$this->db->where('notifs.idnumber !=', $id);
	$query = $this->db->get();
	return $query->result();

}

public function getgrppost($grp_id){
	$id = $this->session->userdata('idnumber');
	$this->db->from('grpnotifs');
	$this->db->join('members','grpnotifs.to_whom=members.idnumber');
	$this->db->join('grpstatus', 'grpnotifs.grpstat_id=grpstatus.grpstat_id');
	$this->db->join('groups','grpstatus.group_id=groups.group_id');
	$this->db->where('grpnotifs.idnumber !=', $id);
	$this->db->where('groups.group_id', $grp_id);
	$query = $this->db->get();
	return $query->result();
}

public function getgrppost2(){
	$id = $this->session->userdata('idnumber');
	$this->db->from('grpnotifs');
	$this->db->join('members','grpnotifs.to_whom=members.idnumber');
	$this->db->join('grpstatus', 'grpnotifs.group_id=grpstatus.group_id');
	$this->db->join('groups','grpstatus.group_id=groups.group_id AND members.group_id=grpstatus.group_id');
	$this->db->where('grpnotifs.idnumber !=', $id);	
	$this->db->order_by('grpnotifs.grpnotif_id', 'DESC');
	$query = $this->db->get();
	return $query->result();
}
public function getdetails2($commented){
	$id = $this->session->userdata('idnumber');
	$this->db->from('notifs');
	$this->db->join('users', 'notifs.idnumber=users.idnumber');
	$this->db->join('status', 'notifs.stat_id=status.stat_id');
	$this->db->join('comments', 'status.stat_id=comments.status_id' );
	$this->db->where('notifs.stat_id', $commented);
	$this->db->order_by('status.stat_id', 'DESC');
	$query = $this->db->get();
	return $query->result();

}
public function sort(){

	$id = $this->session->userdata('idnumber');
	$this->db->from('notifs');
	$this->db->join('grpnotifs','notifs.to_whom=grpnotifs.to_whom');
	$this->db->where('grpnotifs.to_whom', $id);
	$this->db->where('notifs.to_whom', $id);
	$this->db->order_by('notifs.datetime','desc');
	$this->db->order_by('grpnotifs.datetime','desc');
	$query = $this->db->get();
	return $query->result();

}
function countNotifs(){
	   	$id = $this->session->userdata('idnumber');
		$query = $this->db->query('SELECT count(notifs.to_whom and grpnotifs.to_whom) as count from notifs join grpnotifs where grpnotifs.to_whom = '.$id.' and grpnotifs.idnumber != '.$id.' and notifs.to_whom = '.$id.' and notifs.idnumber != '.$id.'');
		return $query->result();
	}
function countNotifs2(){
	date_default_timezone_set("Asia/Manila");
	   	$id = $this->session->userdata('idnumber');
		$query = $this->db->query('SELECT count(datetime > DATE_SUB(NOW(), INTERVAL 1 DAY)) as countnotif FROM notifs WHERE to_whom = '.$id.' and idnumber != '.$id.' AND datetime > DATE_SUB(NOW(), INTERVAL 1 DAY) ="1" ');
		return $query->result();
	}
	function file(){
	date_default_timezone_set("Asia/Manila");
	   	$id = $this->session->userdata('idnumber');
		$query = $this->db->query('SELECT count(file) as countfile FROM document WHERE idnumber = '.$id.'');
		return $query->result();
	}

}
?>