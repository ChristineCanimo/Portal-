<?php

class Post_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

public function get_post(){
	$id = $this->session->userdata('idnumber');
	$this->db->where('idnumber', $id);
        $this->db->from('status');
        $this->db->order_by('stat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function get_post2(){
		$id = $this->session->userdata('idnumber');
	 	$this->db->where('idnumber', $id);
        $this->db->from('numberofstatus');
        $query = $this->db->get();
        return $query->result();
}
public function get_post3($userid){
	$this->db->where('idnumber', $userid);
        $this->db->from('status');
        $this->db->order_by('stat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function get_searchedprofile(){
        $id = $this->session->userdata('idnumber');
        $this->db->where('userprofile_id', $id);
        $this->db->from('exclusivestatus');
        $this->db->join('users', 'exclusivestatus.poster_id=users.idnumber');
        $this->db->order_by('exstat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
                
}

public function get_allsearched($userid){
        $this->db->from('exclusivestatus');
        $this->db->join('users','exclusivestatus.poster_id=users.idnumber');
        $this->db->where('exclusivestatus.userprofile_id', $userid);
        $this->db->order_by('exclusivestatus.exstat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function get_post4($userid){
	 	$this->db->where('idnumber', $userid);
        $this->db->from('numberofstatus');
        $query = $this->db->get();
        return $query->result();
}
public function get_allpost(){
        $this->db->from('status');
        $this->db->order_by('stat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function get_postnoti($commented){
        $this->db->from('status');
        $this->db->where('stat_id',$commented);
        $this->db->order_by('stat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function post_status($data){
        $id = $this->session->userdata('idnumber');
	$this->db->insert('status', $data);

		
}
public function post_searchedprofile($data,$userid){
        $this->db->insert('exclusivestatus', $data);

        $this->db->from('exclusivestatus');
        $this->db->order_by('exstat_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
        {
                $expost = $row['exstat_id'];
        }

        $id = $this->session->userdata('idnumber');
        date_default_timezone_set("Asia/Manila");
        $data2 = array(
                'notif_id' => 'notif_id',
                'idnumber' => $id,
                'to_whom' => $userid,
                'stat_id' => '',
                'group_id' => '',
                'exstat_id' => $expost,
                'grpstat_id' => '',
                'type' => 'post',       
                'datetime' => date("Y-m-d h:i:s")
                );
            
        $this->db->set($data2);
        $this->db->insert($this->db->dbprefix . 'notifs');
                
}

public function post_status2($data){
		$id = $this->session->userdata('idnumber');
		$this->db->select('stat_id','idnumber');
        $this->db->where('idnumber',$id);
        $noofstatus = $this->db->count_all_results('status');
        $this->db->delete('numberofstatus', array('idnumber' => $id));
		$data = array(
        'primarynum' => 'primarynum',
        'idnumber' => $id,
        'no_of_status' => $noofstatus
		);
		$this->db->insert('numberofstatus', $data);
}
public function post_comment($data){
        date_default_timezone_set("Asia/Manila");
        $statid = $this->input->post('status_id');
        $id = $this->session->userdata('idnumber');
        $this->db->insert('comments', $data);

        $this->db->select('*');
        $this->db->from('status');
        $this->db->where('stat_id', $statid);
        $query = $this->db->get();

        foreach ($query->result_array() as $row)
        {
        $data2 = array(
                'notif_id' => 'notif_id',
                'idnumber' => $id,
                'to_whom' => $row['idnumber'],
                'stat_id' => $statid,
                'group_id' => '',
                'exstat_id' => '',
                'grpstat_id' => '',
                'type' => 'comment',
                'datetime' => date("Y-m-d h:i:s")
                );
        }      
        $this->db->set($data2);
        $this->db->insert($this->db->dbprefix . 'notifs');
        
}

public function post_comment2(){
        date_default_timezone_set("Asia/Manila");
        $id = $this->session->userdata('idnumber');
        $statid = $this->input->post('status_id');

        $this->db->select('*');
        $this->db->from('comments');
        $this->db->join('users', 'comments.idnumber!=users.idnumber');
        $this->db->where('comments.status_id', $statid);
        $this->db->where('users.idnumber !=', $id);
        $query = $this->db->get();

        foreach ($query->result_array() as $row)
        {
                $towhom = $row['idnumber'];
        }
        $data2 = array(
                'notif_id' => 'notif_id',
                'idnumber' => $id,
                'to_whom' => $towhom,
                'stat_id' => $statid,
                'group_id' => '',
                'exstat_id' => '',
                'grpstat_id' => '',
                'type' => 'comment',
                'datetime' => date("Y-m-d h:i:s")
                );   
        $this->db->set($data2);
        $this->db->insert($this->db->dbprefix . 'notifs');
        
}

public function post_grpcomment($data,$grp_id){
        date_default_timezone_set("Asia/Manila");
        $grpstatid = $this->input->post('grpstat_id');
        $id = $this->session->userdata('idnumber');
        $type="grpcomment";
        $real="comment";
        $this->db->insert('grp_comments', $data);

        $this->db->from('grp_comments');
        $this->db->order_by('comment_id', 'desc');
        $this->db->limit(1);
        $query2= $this->db->get();
        foreach ($query2->result_array() as $row)
        {       
                $comid = $row['comment_id'];
        }

        $this->db->select('members.idnumber AS to_whom, grp_comments.grpstat_id, grp_comments.group_id');
        $this->db->join('members', 'grp_comments.group_id=members.group_id');
        $this->db->where('grp_comments.group_id', $grp_id);
        $this->db->where('grp_comments.grpstat_id', $grpstatid);
        $this->db->where('members.idnumber !=', $id);
        $query = $this->db->get('grp_comments');

        foreach ($query->result() as $row)
        {
        $this->db->insert('grpnotifs', $row);
        
        }
        $this->db->set('idnumber', $id);
        $this->db->set('type', $type);
        $this->db->set('comment_id', $comid);
        $this->db->set('datetime', date("Y-m-d h:i:s"));  
        $this->db->where('type !=', 'grppost');  
        $this->db->where('comment_id', '0');
        $this->db->update('grpnotifs');
}
public function post_comments($data,$commented){
        $statid = $this->input->post('status_id');
        $id = $this->session->userdata('idnumber');
        $this->db->insert('comments', $data);

        $this->db->select('*');
        $this->db->from('comments');
        $this->db->where('status_id', $statid);
        $this->db->where('idnumber !=', $id);
        $query = $this->db->get();

        foreach ($query->result_array() as $row)
        {
        $data2 = array(
                'notif_id' => 'notif_id',
                'idnumber' => $id,
                'to_whom' => $row['idnumber'],
                'stat_id' => $statid,
                'notification' => 1
                );
        }      
        $this->db->set($data2);
        $this->db->insert($this->db->dbprefix . 'notifs');
        
}
public function get_comment(){
        $this->db->from('comments');
        $this->db->join('users','comments.idnumber=users.idnumber');
        $query = $this->db->get();
        return $query->result();
}

public function get_comment4(){
        $this->db->from('grp_comments');
        $this->db->join('members','grp_comments.member_id=members.member_id');
        $query = $this->db->get();
        return $query->result();
}
public function get_comment2($userid){
        $this->db->from('comments');
        $this->db->join('users','comments.idnumber=users.idnumber');
        $query = $this->db->get();
        return $query->result();
}

public function grp_status($data,$grp_id){

        date_default_timezone_set("Asia/Manila");
        $type="grppost";
        $id = $this->session->userdata('idnumber');
	$this->db->insert('grpstatus', $data);

        $this->db->from('grpstatus');
        $this->db->order_by('grpstat_id', 'desc');
        $this->db->limit(1);
        $query2= $this->db->get();
        foreach ($query2->result_array() as $row)
        {       
                $grpstatid = $row['grpstat_id'];
        }

        $this->db->select('members.idnumber AS to_whom, grpstatus.grpstat_id, grpstatus.group_id');
        $this->db->join('members', 'grpstatus.group_id=members.group_id');
        $this->db->where('grpstatus.group_id', $grp_id);
        $this->db->where('members.idnumber !=', $id);
        $query = $this->db->get('grpstatus');

        foreach ($query->result() as $row)
        {
        $this->db->insert('grpnotifs', $row);
        
        }
        $this->db->set('idnumber', $id);
        $this->db->set('type', $type);
        $this->db->set('datetime', date("Y-m-d h:i:s"));  
        $this->db->where('grpstat_id', $grpstatid);
        $this->db->where('type !=', 'grpcomment');  
        $this->db->where('type !=', 'grppost');  
        $this->db->update('grpnotifs');

}
public function get_grpstatus($grp_id){
        $id = $this->session->userdata('idnumber');
	$this->db->select("*");
	$this->db->from('grpstatus');
        $this->db->join('members', 'grpstatus.member_id=members.member_id');
	$this->db->where('grpstatus.group_id', $grp_id);
	$this->db->order_by('grpstatus.grpstat_id', 'DESC');
	$query = $this->db->get();
	return $query->result();
}
public function comment_members($grp_id){

        $id = $this->session->userdata('idnumber');
        $this->db->select("*");
        $this->db->from('grpstatus');
        $this->db->join('members', 'grpstatus.member_id=members.member_id');
        $this->db->where('members.idnumber', $id);
        $this->db->order_by('grpstatus.grpstat_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
}
public function get_li(){
	$this->db->select("*");
        $this->db->from('status');
        $this->db->order_by('idnumber', 'ASC');
        $query = $this->db->get();
        return $query->result();
}

}
	?>
