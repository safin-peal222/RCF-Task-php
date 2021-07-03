<?php
session_start();
$servername ="localhost";
$dBUsername ="root";
$dBpassword ="";
$dBname ="rcf_task";



$con= mysqli_connect($servername,$dBUsername,$dBpassword,$dBname);


if(!$con)
{
    die("connection failed".mysqli_connect_error());
}


if(isset($_GET['token']))
{
    $token =$_GET['token'];
    $update_query = "UPDATE admin_login SET status = 'active' WHERE token = '$token' ";
    $run =mysqli_query($con,$update_query);
    if($run){
        if(isset($_SESSION['msg']))
        {
            $_SESSION['msg']="Account Updated Successfully";
            header("location:./login.php");
        }else
        {
            $_SESSION['msg']="Account Not Updated Successfully";
            header("location:./admin.php");

        }
    }else{
        $_SESSION['msg']="Account Not Updated Successfully";
            header("location:./admin.php");

    }
}
?>