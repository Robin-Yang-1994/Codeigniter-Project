<?php
class Userdetailsmodels extends CI_Model {
 function __construct()
 {
    parent::__construct();
 }
 
 function insertUser($Name,$Surname,$Sex,$Username,$Email,$Password,$Contactnum){ //insert this array
 $newUser=array("name"=>$Name,
                "surname"=>$Surname,
                "sex"=>$Sex,
                "user_name"=>$Username,
                "user_email"=>$Email,
                "user_password"=>$Password,
                "contact_number"=>$Contactnum
                );
 return $this->db->insert('asw_user_login', $newUser); // addinto user login table
 }
 
 function loginUser($Username,$Password){  //login as a user method
 $this->db->select('*');
 $this->db->where("user_name", $Username);
 $this->db->where("user_password",$Password);
 $this->db->limit(1);
 $query = $this->db->get('asw_user_login'); //looks for results in this table, if row = 1, return results
 
 if ($query->num_rows() == 1) {
 foreach ($query->result() as $result) {
 $userdata =array('username'=>$result->user_name,'logged_in'=>True); 
 }
 $this->session->set_userdata($userdata); //give it session data to set name on their account
 return 1;
 }
 else {
 return 0;
 }
 }
 
 function adminUser($Username,$Password){ //login as a admin method
 $this->db->select('*');
 $this->db->where("user_name", $Username);
 $this->db->where("user_password",$Password);
 $this->db->limit(1);
 $query2 = $this->db->get('asw_admin_login');//looks for results in this table, if row = 1, return results
 
 if ($query2->num_rows() == 1) {
 foreach ($query2->result() as $result) {
 $userdata2 =array('username'=>$result->user_name,'logged_in'=>True);
 }
 $this->session->set_userdata($userdata2); //give it session data to set name on their account
 return 2;
 }
 else {
 return 0;
 }
 }

 function updateUser($Sname,$Name,$Username,$Email,$Contact)
    {
        $revisedata=array("name"=>$Name,"surname"=>$Sname,"user_name"=>$Username,
        "contact_number"=>$Contact);
        $this->db->where('user_email', $Email);
        return $this->db->update('asw_user_login', $revisedata); //takes all these parameters from the controller then add to this db
    }
 
 function getUserDetails(){
 $query = $this->db->get('asw_user_login'); // get users account details
 return $query->result();
 }
 
 
 function delete($user_id) // take user_id from the input then delete the id from the db table
  {
   $this->db->where('user_id', $user_id);
   $deletedata = $this->db->delete('asw_user_login');
   return $deletedata;
  }
 
 function getPassword($username,$email){  //geting the user name and email 
 $this->db->like('user_name',$username);
 $this->db->like('user_email',$email);
 $query = $this->db->get('asw_user_login');
 if ($query->num_rows() == 0){
  return 0;
 }
 else{
 return $query->result();
 }
 }

}

?>