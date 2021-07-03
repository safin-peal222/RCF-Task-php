<?php


$serial = $_GET['serial'];



$conn = mysqli_connect("localhost","root","","rcf_task");

$sql = "UPDATE donorlist SET DEL = 1 WHERE serial = '$serial'";



mysqli_query($conn,$sql) or die("query unsuccessfull");

header('Location: ../viewdonor.php');



















?>