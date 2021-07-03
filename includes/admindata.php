<?php


$servername ="localhost";
$dBUsername ="root";
$dBpassword ="";
$dBname ="rcf_task";



$conn = mysqli_connect($servername,$dBUsername,$dBpassword,$dBname);


if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

if(isset($_POST['login-submit']))
{
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    $sql = "select * from admin_login where email='$email' && password='$password' ";

    $result =mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1)
    {
        header("Location: ../adddonor.php");
    exit();

    }else{
        echo "you have entered incorrect information";
    }
}



?>


