<html>
<title>Delete</title>

<link href="<?php echo base_url(); ?>css/Style.css" type="text/css" rel="stylesheet" />

<body bgcolor="#00CCFF">
  
<div class="delBox">
<div class="del"> 
<body>
<h1>Delete User</h1>  
<?php
echo form_open('Userdetails/delete');
foreach ($query as $querys)
{
    echo "<p>";
    echo form_label($querys->user_name, 'userid'.$querys->user_id);
    $data = array('name' => 'users[]', 'id' => 'userid'.$querys->user_id, 'value' => $querys->user_id);
    echo form_checkbox($data);
    echo "</p>";
}
    echo form_submit("delete", "Delete User");
    echo form_close();
?>

<br>
    
<a href="<?php echo site_url('Userdetails/AdminPage');?>">Home</a><br>

</body>
</html>