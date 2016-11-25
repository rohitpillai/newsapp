<?php 

$data = [];

$data["title"]=$_POST["title"];
$data["Date"]=$_POST["Date"];
$data["News"]=$_POST["News"];
$data["Tags"]=$_POST["Tags"];
$data["Author"]=$_POST["Author"];

file_put_contents("filename.txt", serialize($data));

header('Location: viewNews.php');
 ?>