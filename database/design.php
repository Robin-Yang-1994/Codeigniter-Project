<html>
<head>	
<title>Tables Page</title>
<style>
    table, th, td /* Centers the tables, move text to the left, give it a round edge and background colour*/
     {
          border: 1px solid black;
          border-radius: 5px;
          text-align: left;
          background-color: #FFA07A;
          margin-left: auto;
          margin-right: auto;
     }
</style>
<body>
<body bgcolor="#00CCFF"> 
<table>
<?php
require_once("connection.php");  //Requiring this file
require_once("databaseClass.php");    //Requiring this file
$conn=ConnectionProject::connect();
?>

<?php 
databaseClass::setConnection(ConnectionProject::connect()); //Get connection to the database
$User=databaseClass::User();  //Call method from design class

    echo '<table width="1000"><caption>Users/Clients</caption>';
    echo '<tr><th>user_id</th><th>user_name</th><th>user_email</th><th>user_password (md5) </th><th>name</th><th>surname</th><th>Sex</th><th>contact_number</th><tr>'; //Open table make headers
   
    foreach ($User as $Client) //Loop to display all the data until the last one

    {
	echo "<tr>";
	echo "<td>".$Client['user_id']."</td>"; //Display the information selected from the database
	echo "<td>".$Client['user_name']."</td>";
	echo "<td>".$Client['user_email']."</td>";
	echo "<td>".$Client['user_password']."</td>";
	echo "<td>".$Client['name']."</td>";
	echo "<td>".$Client['surname']."</td>";
        echo "<td>".$Client['Sex']."</td>";
	echo "<td>".$Client['contact_number']."</td>";
	echo "</tr>";    
    } 						
    echo "</table>"; //Close table
?>

<br>
<br>    

<?php 
databaseClass::setConnection(ConnectionProject::connect()); //Get connection to the database
$Admin=databaseClass::Admin();  //Call method from design class

    echo '<table width="6 00"><caption>Admin/Keyworkers</caption>';
    echo '<tr><th>admin_id</th><th>user_name</th><th>user_password (md5)</th><tr>'; //Open table make headers
   
    foreach ($Admin as $Manager) //Loop to display all the data until the last one

    {
	echo "<tr>";
	echo "<td>".$Manager['admin_id']."</td>"; //Display the information selected from the database
	echo "<td>".$Manager['user_name']."</td>";
	echo "<td>".$Manager['user_password']."</td>";
	echo "</tr>";    
    } 						
    echo "</table>"; //Close table
?>

<br>
<br>  

<?php 
databaseClass::setConnection(ConnectionProject::connect()); //Get connection to the database
$Course=databaseClass::Course();  //Call method from design class

    echo '<table width="1000"><caption>Users/Clients</caption>';
    echo '<tr><th>course_id</th><th>course_name</th><th>course_code</th><th>course_information</th><tr>'; //Open table make headers
   
    foreach ($Course as $Workshops) //Loop to display all the data until the last one

    {
	echo "<tr>";
	echo "<td>".$Workshops['course_id']."</td>"; //Display the information selected from the database
	echo "<td>".$Workshops['course_name']."</td>";
	echo "<td>".$Workshops['course_code']."</td>";
        echo "<td>".$Workshops['course_information']."</td>";
	echo "</tr>";    
    } 						
    echo "</table>"; //Close table
?>

</table>
</body>
</html>