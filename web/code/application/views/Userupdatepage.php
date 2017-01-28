
<link href="<?php echo base_url(); ?>css/Style.css" type="text/css" rel="stylesheet" />

<body bgcolor="#00CCFF">

<div class="upBox">
<div class="up"> 
<body>
    
<h1 id="upTitle"> Update </h1>    
<?php echo validation_errors('<p id="error">'); ?>    <!--Form validation-->
<?php echo form_open('Userdetails/updateDetails'); ?>  <!--opens another controller to run another method-->

<label> The Email cannot be changed ! </label>

<br>
<br>

<label>Email: </label>
<input type="text" name="user_email" id="Uemail"/>
<br>
<br>
<label>Name: </label>
<input type="text" name="name" id="Uname"/>
<br>
<br>
<label>Surname: </label>
<input type="text" name="surname" id="Usname"/>
<br>
<br>
<label>Username: </label>
<input type="text" name="user_name" id="Uusername"/>
<br>
<br>        
<label>Phone no:</label>
<input type="text" name="contact" id="Ucontact"/>
<br>
<br>     

<input type="submit" value="submit" name="submit" id="submitbtn"/>
<?php echo form_close(); ?>

<a href="Userpage"> Back </a>

</body>
</html>