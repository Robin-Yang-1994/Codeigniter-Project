<!DOCTYPE HTML>
<html>
<head>
<title>Find Course</title>
<!--http://www.codersmount.com/2012/09/jquery-ui-autocomplete-in-codeigniter-with-database/
--><body bgcolor="#00CCFF">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="<?php echo base_url(); ?>css/Style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery-ui-1.10.4.custom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery-ui-1.10.4.custom.min.css" />

 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.10.4.custom.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.10.4.custom.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>

</head>
<div class="imgSlide">
              <div id="slider">
                <ul class="slides">
                 <li class="slide slide0"><img src="../../images/image10.jpg" /></li>  
                 <li class="slide slide1"><img src="../../images/image1.jpg" /></li>
                 <li class="slide slide2"><img src="../../images/image2.jpg" /></li>
                 <li class="slide slide3"><img src="../../images/image3.jpg" /></li>
                 <li class="slide slide4"><img src="../../images/image4.jpg" /></li>
                 <li class="slide slide5"><img src="../../images/image5.jpg" /></li>
                 <li class="slide slide6"><img src="../../images/image6.jpg" /></li>
                 <li class="slide slide7"><img src="../../images/image7.jpg" /></li>
                </ul>
            </div>

</div>

<ul class="sidebar">
      <li class="menubar" style="font-size: 24px" onclick="showTitle()"><a>ASW</a></li>
      <li><a href="<?php echo site_url('Course/findCourses');?>">Home</a></li>
      <li><a href="<?php echo site_url('Userdetails/userRegistration');?>">Register</a></li>
      <li><a href="<?php echo site_url('Userdetails/userLogin');?>">Login</a></li>
      <li><a href="<?php echo site_url('Abouts/showAbout');?>">About Us</a></li>
      <p id="developer">Designed by Robin Yang <br> 2015 </p>
      </ul>


<?php echo form_open('course/getFindCourse'); ?>
<input type="text" name="course_name" id="searchform" placeholder="search course"/>
<input type="submit" value="Search" name="submit" id="searchsubmit" style="cursor:pointer"/>
<?php
if(isset($query))
{
    foreach($query as $querys)
    {
        echo "<a href='displayCourses/".$querys->course_id."'>";
        echo "<p id='output'>".$querys->course_name."</p><br></br>";
    }
}
?>

  <script>
  $(function() {
    //setting up the options for slider container
    var width = 720;
    var animationSpeed = 800;
    var pause = 3000;
    var currentSlide = 1;
    
    //cache elements for quicker access
    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);
    
    var interval;

    function startSlider() { //method to set slider movement
      interval = setInterval(function() { //set activity
      $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() { //move left
        if (++currentSlide === $slides.length) {
          currentSlide = 1; // 1 to always show an image
          $slideContainer.css('margin-left', 0);
          }
        });
          }, pause); // stops image for 3000 mms
    }
    
    function pauseSlider() {
      clearInterval(interval); //stops acivity 
    }

    $slideContainer
      .on('mouseenter', pauseSlider) //runs pause alider 
      .on('mouseleave', startSlider); //start slider when mouse is off slider 

    startSlider();
});
  

    function showTitle() {
    alert(" Welcome! This is ASW (A Sheltered Workshop) supporting young lives to be sucessful");
  }
  
</script>


</body>
</html>

