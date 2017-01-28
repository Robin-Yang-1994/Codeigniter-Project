<!DOCTYPE HTML>
<html>
<head>
<title>Course Result</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<h1>Search Result</h1>

<?php
foreach($query as $querys)
{
echo "<li>".$querys->course_name;
}
?>

</body>
</html>

