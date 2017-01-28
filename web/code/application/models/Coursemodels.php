<?php
class Coursemodels extends CI_Model {
 function __construct()
 {
    parent::__construct();
 }
 
 function getCourse(){
 $query = $this->db->get('asw_course'); //get course table
 return $query->result();
 }
 
 function getSearch($course_name){
 $this->db->like('course_name',$course_name);
 $query = $this->db->get('asw_course');
 if ($query->num_rows() == 0){
  return 0;
 }
 else{
 return $query->result();
 }
 }
  //  $this->db->select('course_name'); //select name
  //  $this->db->like('course_name', $course_name); //match data
  //  $query = $this->db->get('asw_course');  //get from this table
  //  if($query->num_rows > 0){  //check if the table contains these results
  //    foreach ($query->result_array() as $row){  // for loop
  //      $row_set[] = htmlentities(stripslashes($row['course_name'])); //build an array
  //    }
  //    echo json_encode($row_set); //format the array into json data
  //  }
  //}
 
 function viewDetails($course_id){
 $this->db->like('course_id',$course_id);  //get course id like the course id  requested
 $query = $this->db->get('asw_course');
 return $query->result();
 }
   
 function insertCourse($course_name,$course_code,$course_information){ // add these parameters into the tavble names
 $newCourse=array("course_name"=>$course_name,"course_code"=>$course_code,"course_information"=>$course_information);
 return $this->db->insert('asw_course', $newCourse);
 }
 
}

?>
