<?php
class Course extends CI_Controller
{

    public function getCourses(){ //test
    $this->load->model("Coursemodels");
    $data['query']=$this->Coursemodels->getCourse();
    $this->load->view("Searchview",$data);
    }
    
    public function findCourses(){ // Home
    $data['title']="Find Course"; // Give page this title
    $this->load->view("Searchform",$data); //Load the search forms
    }
    
    public function getFindCourse(){
    $course_name=$this->input->post('course_name');
    if(empty($course_name)){
      $this->load->view("Searchform");
    }
    else{
    $course_name=$this->input->post('course_name');    
    $this->load->model("Coursemodels");
    $data['query']=$this->Coursemodels->getSearch($course_name);
    $result = $this->Coursemodels->getSearch($course_name);
    if($result == 0){
        $this->load->view("Searchform",$result);
    }
    else{
    $this->load->view("Searchform",$data);
    }}
    //$this->load->model('Coursemodels'); //Attempt of the AJax Live Search (Including hte Course Model)
    //if (isset($_GET['term'])){
    //  $course_name = strtolower($_GET['term']);
    //  $this->Coursemodels->getSearch($course_name);
    //}
  }
    
    public function displayCourses($course_id){ //Displays get the courses id 
    $this->load->model("Coursemodels"); //Go to model
    $data['query']=$this->Coursemodels->viewDetails($course_id); //Data get is called query
    $this->load->view("Courseview",$data); //Pass data into course view
    }
    
    public function add(){
        $this->load->view("AddCoursePage");  //Load the add course page
    }
    
    public function addCourse(){
    $course_name=$this->input->post('course_name');  //Get information from the form
    $course_code=$this->input->post('course_code'); //Get information from the form
    $course_information=$this->input->post('course_information');//Get information from the form
    if(empty($course_name)){
      $this->load->view("Adminpage"); //Reload this page if that colum is empty
    }
    else{ 
    $course_name=$this->input->post('course_name'); //Get information from the form
    $course_code=$this->input->post('course_code');
    $course_information=$this->input->post('course_information');    
    $this->load->model("Coursemodels");
    if($this->Coursemodels->insertCourse($course_name,$course_code,$course_information)){ //Passes these parameters to be added by the model
    $this->load->view("AddCoursePage");  
    }else{
    $this->load->view("Adminpage");
    $this->load->view("CourseAddedMsg");
    }
    }
    }
    
    //public function feedBackPage() {
    //$this->load->view('feedbackPage');//Load page
    //}
    //
    //public function courseFeedback()
    //{
    //    $Course=$this->input->post('feed1');  //Get information from the form
    //    $Rate=$this->input->post('rate'); //Get information from the form
    //    $Comments=$this->input->post('feed2');//Get information from the form
    //    $Date=$this->input->post('datapick');//Get information from the form
    //
    // $this->load->model("Coursemodels");
    //    if($this->Coursemodels->feedback($Course,$Rate,$Comments,$Date)){
    //    $this->userPage();
    //    }else{
    //    $this->feedBackpage();
    //    echo"error";
    //    
    //}
    //    }
    //    
    //
    

}   
?>
