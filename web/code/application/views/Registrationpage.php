<html>
<head>
<title>Registration Form</title>
<link href="<?php echo base_url(); ?>css/Style.css" type="text/css" rel="stylesheet" />
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
 
<ul class="sidebar">
      <li class="menubar" style="font-size: 24px" onclick="showTitle()"><a>ASW</a></li>
      <li><a href="<?php echo site_url('Course/findCourses');?>">Home</a></li>
      <li><a href="<?php echo site_url('Userdetails/userRegistration');?>">Register</a></li>
      <li><a href="<?php echo site_url('Userdetails/userLogin');?>">Login</a></li>
      <li><a href="<?php echo site_url('Abouts/showAbout');?>">About Us</a></li>
      <p id="developer">Designed by Robin Yang <br> 2015 </p>
      </ul>

<body bgcolor="#00CCFF">
<div class="regBox">
<div class="reg"> 
<body>
    
<h1 id="regTitle">Registration Form</h1>
<?php echo validation_errors('<p id="error">'); ?>
<?php echo form_open('Userdetails/Registration');?>

<label id="regLabel1">Name:</label>
<input type="text" name="name" id="regName" placeholder="name"/>
<br>
    
<label id="regLabel6">Surname:</label>
<input type="text" name="surname" id="regSName" placeholder="surname"/>
<br>
    
<label id="regLabel7">Sex/Gender:</label>
<input type="radio" name="sex" id="regMale" value="male"/>Male
<input type="radio" name="sex" id="regFemale" value="female"/>Female
<br>
    
<label id="regLabel2">Username:</label>
<input type="text" name="user_name" id="regUser" placeholder="username"/>
<br>
    
<label id="regLabel3">Email:</label>
<input type="text" name="user_email" id="regEmail" placeholder="e-mail"/>
<br>
    
<label id="regLabel4">Password:</label>
<input type="password" name="user_password" id="regPassword" placeholder="**********"/>

<label id="regLabel5">Comfirm<br>Password:</label>
<input type="password" name="con_password" id="conPassword" placeholder="**********"/>

<br>
    
<label id="regLabel8">Phone no:</label>
<input type="text" name="contact" id="regContact" placeholder="mobile/telephone"/>

<br>    

<input type="submit" value="submit " name="submit" id="regBtn"/>

<br>
    
<?php echo form_close(); ?>

<a href="userLogin" id="signInBtn">Click Here To Login</a>

<script>  
    function showTitle() {
    alert("A Sheltered Workshop ");
}
</script>

</body>
</html>