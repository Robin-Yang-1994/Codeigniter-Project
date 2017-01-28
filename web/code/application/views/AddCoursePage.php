
<body bgcolor="#00CCFF">

<?php echo form_open('course/addCourse'); ?>   
<label>Course</label>
<input type="text" name="course_name" id="course"/>
<label>Course Code</label>
<input type="text" name="course_code" id="coursecode"/>
<label>Course Description</label>
<input type="text" name="course_information" id="coursedes"/>
<input type="submit" value="Add " name="submit"/>
<?php echo form_close(); ?>

<a href="<?php echo site_url('Userdetails/AdminPage');?>">Home</a><br>