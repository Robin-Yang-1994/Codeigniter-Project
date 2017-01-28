<html>
<head>
<title>About Us</title>
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
<div class="aboutBox">
<div class="title">    
<h1 id="workShopTitle">ASW </h1>

    
<p id="aboutText"> The sheltered workshop provides a supportive environment for those with mental
health or learning disability problems in which to work. The clients are referred by
GPs or any other member of the community healthcare team. Courses are available
for those wishing to gain a qualification (NVQ levels). The workshop also runs basic
numeracy and literacy courses.</p>
<p id="aboutText"> There are five sections of the workshop: woodwork, metal work, upholstery,
gardening and IT. Clients can choose to work any number of half-day sessions in
any of the sections providing there is a vacancy and they are suitable.</p>
<p id="aboutText"> The client is initially assessed by a care manager, or one of his/her assistants, after
which a programme of care with regular reviews is implemented. The programme of
care might include a number of different work sessions and enrolment into one or
more courses.</p>
<b id="aboutText">Clients are paid for by the local Health authority, donations and the Council for those
referred by social services.</b><br>
<p id="aboutText"> A number of trips are organised each season; however, not all clients attend each as
some are considered unsuitable due to previous performance or antisocial behaviour
etc. Clients regularly fill in satisfaction questionnaires, and each section is partly
judged on this as well as profit (the workshop has a shop and several retail outlets).
The workshop also has a website, which is basically an online catalogue. Customers
cannot place orders over the web, and there is no intention of them being able to do
so in the future.</p>
<p id="aboutText"> The aim is to gradually get clients to move from the workshop into real employment,
but unfortunately this happens in less than 50% of cases. Where it does happen,
long term follow up support is provided by the case manager and his/her team.
While in the workshop, any critical incidents involving a client are recorded by the
key worker, of which there are several working in each of the sections. Each section
also has a designated manager who is a particular key worker appointed on a
rotation basis.</p><br> 

<script>
    function showTitle() {
    alert("A Sheltered Workshop");
    }

</script>
    
</body>
</html>