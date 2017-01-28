<?php

class Userdetails extends CI_Controller
{

public function __construct() {  //Setting a constructor so other elements can access these helpers
parent::__construct();

$this->load->helper('form');  //forms

$this->load->library('form_validation'); //error checking

$this->load->library('session'); //save data

$this->load->model('Userdetailsmodels'); // related model

}

public function userLogin() {
$this->load->view('Loginpage'); //Load page
}

public function userRegistration() {
$this->load->view('Registrationpage');//Load page
}

public function userPage() {
  if ($this->session->userdata('username') != "") { //only load user page if there is session for safety
    $this->load->view('Userpage');
  }
}

public function Registration() {

$Name = $this->input->post('name');
$Surname = $this->input->post('surname');
$Sex = $this->input->post('sex');
$Username = $this->input->post('user_name');
$Email = $this->input->post('user_email');
$Password = md5($this->input->post('user_password'));
$ConPassword = md5($this->input->post('con_password')); //encrypting password
$Contactnum = $this->input->post('contact');

$this->form_validation->set_rules('name','Name', 'required');   //Setting rules for each input colum for validation
$this->form_validation->set_rules('surname','Surname', 'required');
$this->form_validation->set_rules('sex','Sex/Gender', 'required');
$this->form_validation->set_rules('user_name', 'Username', 'required|is_unique[asw_user_login.user_name]');
$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|is_unique[asw_user_login.user_email]');
$this->form_validation->set_rules('user_password', 'Password', 'required');
$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|matches[user_password]');
$this->form_validation->set_rules('contact', 'Phone Number', 'required|numeric|max_length[11]');

if ($this->form_validation->run() == FALSE) { //checks, if error then reload the page
$this->userRegistration();
}else{

$this->load->model("Userdetailsmodels");

if($this->Userdetailsmodels->insertUser($Name,$Surname,$Sex,$Username,$Email,$Password,$Contactnum)){ //parameters
      
$this->userLogin();
} else {
$this->userRegistration();
}
}
}


public function user_login_process() {

$Username = $this->input->post('user_name');
$Password = md5($this->input->post('user_password'));

$this->form_validation->set_rules('user_name', 'Username', 'required');
$this->form_validation->set_rules('user_password', 'Password', 'required');//Setting rules for each input colum for validation

if ($this->form_validation->run() == FALSE) { //checks, if error then reload the view
$this->load->view('Loginpage');
}
else{
$this->load->model("Userdetailsmodels");
$result = $this->Userdetailsmodels->loginUser($Username,$Password); //checks model result
$result2 = $this->Userdetailsmodels->adminUser($Username,$Password); //checks model results 2 

 if($result == 1 ){  //check return value for user login or admin login
$this->userPage();
 }
 elseif($result2 == 2){
   $this->adminPage();
 }
 else{
 $this->userLogin();
 $this->load->view('LoginErrorMsg');
 }    
}
}
public function adminPage () {
   if ($this->session->userdata('username') != "") { ///only load user page if there is session for safety
      $this->load->view('Adminpage');
   }
}
public function Updates() {
   $this->load->view('Userupdatepage'); //loads update page, access when logged in
}

public function updateDetails(){ //updating details
    //$Userid = $this->input->post('user_id');
    $Email = $this->input->post('user_email');
    $Name = $this->input->post('name');
    $Sname = $this->input->post('surname');
    $Username = $this->input->post('user_name');
    $Contact = $this->input->post('contact');
    
   // $this->form_validation->set_rules('user_id','ID', 'required');
    $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('name','Name', 'required'); //validation rules
    $this->form_validation->set_rules('surname','Surname', 'required');
    $this->form_validation->set_rules('user_name', 'Username', 'required');
    $this->form_validation->set_rules('contact', 'Phone Number', 'required|numeric|max_length[11]');

    if ($this->form_validation->run() == FALSE) {
    $this->Updates();
	}else{
    $this->load->model("Userdetailsmodels");
    if($this->Userdetailsmodels->updateUser($Sname,$Name,$Username,$Email,$Contact)){
        $this->userPage();
        $this->load->view('UpdateConfirmMsg');
    }else{
        $this->Updates();
        echo"error";
        
    }
}
}

   
public function deleteUser(){ //deleteing users by gettng their details
   if ($this->session->userdata('username') != "") {
   $this->load->model("Userdetailsmodels");
   $data['query']=$this->Userdetailsmodels->getUserDetails();
   $this->load->view("DeleteUserPage",$data);
   }
   else {
      $this->load->view('NoAccessMsg');
   }
}

public function delete(){
   $User = $this->input->post('users'); //delete user by their name
   foreach($User as $user_id)
   {
      $this->Userdetailsmodels->delete($user_id);
   }
   $this->deleteUser();
}

public function logout(){

$this->session->unset_userdata('Userpage'); 
$this->session->unset_userdata('AdminPage');
$this->session->unset_userdata('deleteUser');
$this->session->sess_destroy;  //close session to get rid of user data
redirect('Userdetails/user_login_process', 'refresh'); // refreshes page
}

public function recover(){ // samiliar to search but takes 2 inputs and outputting md5
  
  $Username=$this->input->post('name');
  $Email=$this->input->post('mail');
    if(empty($Username)){
      $this->load->view("Loginpage");
    }
     elseif(empty($Email)){
      $this->load->view("Loginpage");
    }
    else{
  $Username=$this->input->post('name');
  $Email=$this->input->post('mail');
  $this->load->model("Userdetailsmodels");
  $data['pass']=$this->Userdetailsmodels->getPassword($Username,$Email);
  $result = $this->Userdetailsmodels->getPassword($Username, $Email);
    if($result == 0){
      $this->load->view("Loginpage");
    }
    else{
    $this->load->view("Loginpage",$data);
  }
  }
  
}

}
?>