<?php

$data = [];

$data = unserialize(file_get_contents("filename.txt"));


?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome to TOD</h1>
<br>
<?php echo $data["Date"] ?><br>
<?php echo $data["News"] ?><br>
<?php echo $data["Tags"] ?><br>
<?php echo $data["Author"] ?><br>
</body>
</html>