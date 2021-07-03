<?php




$serial = $_GET['serial'];



$conn = mysqli_connect("localhost","root","","rcf_task") or die("connection failed");

$sql = "UPDATE donorlist SET count=count+1 WHERE serial='$serial'" ;




$result = mysqli_query($conn,$sql) or die("query unsuccessfull");

header('Location: ../viewdonor.php');





?>