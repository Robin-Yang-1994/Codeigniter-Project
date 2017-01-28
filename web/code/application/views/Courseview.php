<!DOCTYPE HTML>
<html>
<head>
<title>Course Details</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="<?php echo base_url(); ?>css/Style.css" type="text/css" rel="stylesheet" />
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body bgcolor="#00CCFF">
 
<body>
 
 <ul class="sidebar">
      <li class="menubar" style="font-size: 24px" onclick="showTitle()"><a>ASW</a></li>
      <li><a href="<?php echo site_url('Course/findCourses');?>">Home</a></li>
      <li><a href="<?php echo site_url('Userdetails/userRegistration');?>">Register</a></li>
      <li><a href="<?php echo site_url('Userdetails/userLogin');?>">Login</a></li>
      <li><a href="<?php echo site_url('Abouts/showAbout');?>">About Us</a></li>
      <p id="developer">Designed by Robin Yang <br> 2015 </p>
      </ul>
    


<div class="courseBox">
              <div id="course">
<h1 id="courseTitle">Course Details</h1>
<?php
foreach($query as $querys)
{
 echo "<p> Course: ".$querys->course_name;
 echo "<br>";
 echo "<p> Course code: ".$querys->course_code;
 echo "<br>";
 echo "<p> Course detail: ".$querys->course_information;
 echo "<br>";
}
?>

</div>
    </div>

<a href="<?php echo site_url('Userdetails/userlogin');?>">Click Here To Login</a>

<script>
    function showTitle() {
    alert("A Sheltered Workshop");
    }

</script>

</body>
</html>

