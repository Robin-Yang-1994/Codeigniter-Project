
<html>
<head>
    
    <title>Admin</title>
<link href="<?php echo base_url(); ?>css/Style.css" type="text/css" rel="stylesheet" />

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <!--<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
  <!--<script src= " echo base_url(); ?>js/acordian.js"></script>-->


</head>

    <ul class="sidebar">
      <li class="menubar" style="font-size: 24px" onclick="showTitle()"><a>ASW</a></li>
      <li><a href="<?php echo site_url('Course/findCourses');?>">Home</a></li>
      <li><a href="<?php echo site_url('Userdetails/userLogin');?>">Login</a></li>
      <li><a href="<?php echo site_url('Abouts/showAbout');?>">About Us</a></li>
      <li><a href="logout">Logout</a></li>
      <p id="developer">Designed by Robin Yang <br> 2015 </p>
      </ul>
    
<body bgcolor="#00CCFF">    
<body>
    
<div class="userBox">
<div class="user"> 
<h1 id="adminForm">Welcome back, <?php echo $this->session->userdata('username'); ?></h1>
<h2 id="optionForm">Options</h2>
 
<a id="add" href="<?php echo site_url('Course/add');?>">Add Course</a>

<br>

<!--<a href="deleteUser">Delete</a>-->
<a id="delete" href="<?php echo site_url('Userdetails/deleteUser');?>">Delete User</a>


</div>
</div>    
    

<script>
        $(document).ready(function(){
            
        $("#optionForm").click(function(){
        $("#add").slideToggle('slow');
        $("#delete").slideToggle('slow');
        })
        
    });
        
    function showTitle() {
    alert("A Sheltered Workshop ");
    }

</script>

</body>
</html>