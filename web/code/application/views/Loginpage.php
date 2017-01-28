<html>
<head>
<title>Login Form</title>
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
<div class="loginBox">
<div class="login">    
<h1 id="loginTitle">Login</h1>
<?php echo validation_errors('<p id="error">'); ?>
<?php echo form_open('Userdetails/user_login_process'); ?>
<label id="loginLabel1">Username :</label>
<input type="text" name="user_name" id="loginuser" placeholder="username"/>
<label id="loginLabel2">Password :</label>
<input type="password" name="user_password" id="loginpass" placeholder="**********"/>
<br>  
<input type="submit" value="Login" name="submit" id="loginBtn"/>
<br> 
<?php echo form_close(); ?>

<a href="userRegistration" id="signUpBtn">To SignUp Click Here</a>

<br>

<h1 id="recoverTitle">Forgotten Password</h1>
<?php echo form_open('Userdetails/recover'); ?>
<label id="recoverLabel">Username :</label>
<input type="text" name="name" id="forgetuser" placeholder="username"/>
<br>
<label id="recoverLabel1">Email :</label>      
<input type="text" name="mail" id="forgetemail" placeholder="email"/>
<br>
<br>      
<input type="submit" value="Get" name="submit" id="recoverBtn" onclick="showCracker()"/>
<br> 
<?php echo form_close(); ?>

<?php
if(isset($pass))
{
    foreach($pass as $password)
    {
      echo "<p id='forgetpass'>".$password->user_password."</p>";
    }
}
?>

<script>
    function showTitle() {
    alert("A Sheltered Workshop ");
}

    function showCracker() {
    alert("Please visit 'Crack Station' to decrypt code");
}

$("#recoverTitle").click(function(){
        $("#recoverLabel").slideToggle('slow');
        $("#forgetuser").slideToggle('slow');
        $("#recoverLabel1").slideToggle('slow');
        $("#forgetemail").slideToggle('slow');
        $("#recoverBtn").slideToggle('slow');
        })

</script>

</body>
</html>