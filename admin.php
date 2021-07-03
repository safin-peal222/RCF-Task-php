<!---
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Donate Blood for save life</h1>
            <h2>Admin page</h2>
        </div>
        <div id="menu">
        <div id="main-content">
        <form action="./includes/admindata.php" class="post-form" method="post">

<div class="form-group">
<label>Email</label>
<input type="text" name="email"/><br>
</div>
<div class="form-group">

<label>Password</label>
<input type="password" name="pwd"/>
</div>

<input class="submit" type="submit" value="Login" name="login-submit"  />



</form>
</div>
        </div>
     -->
     <?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php

$servername ="localhost";
$dBUsername ="root";
$dBpassword ="";
$dBname ="rcf_task";



$con= mysqli_connect($servername,$dBUsername,$dBpassword,$dBname);


if(!$con)
{
    die("connection failed".mysqli_connect_error());
}

if(isset($_POST['submit'])){
$username=mysqli_real_escape_string($con,$_POST['username']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$pass=mysqli_real_escape_string($con,$_POST['pass']);
$cpass=mysqli_real_escape_string($con,$_POST['cpass']);
//$password=password_hash($pass,PASSWORD_BCRYPT);
//$cpassword=password_hash($cpass,PASSWORD_BCRYPT);
$token=bin2hex(random_bytes(15));
$status="inactive";

$emailquery="SELECT * FROM admin_login WHERE email = '$email'";
$query1=mysqli_query($con,$emailquery);
$email_count =mysqli_num_rows($query1);
if($email_count>0)
{
  $email_error="email aready exists";
}else{
  if($pass == $cpass){
    $insertquery="INSERT INTO admin_login (username,email,mobile,password,cpassword,token,status) VALUES ('$username','$email','$phone','$pass','$cpass','$token','$status')";
    $query2=mysqli_query($con,$insertquery);
    if($query2)
    {
      
      $subject="Simple Email in PHP";
      $body="Hi $username,THis is test for the email testing for website
      http://localhost/RCF-TASK-php/activate.php?token=$token";
     
      
     
      if(mail($email,$subject,$body))
      {
        $_SESSION['msg']="check your mail to activate your account $email";
        header("location: ./login.php");
        echo "Email Success to $email";
      }else{
        echo "email send failed";
      }
    
      ?>
      <script>
        alert("inserted successfully");
      </script>
      <?php

    }else
    {
     ?>
     <script>
        alert("inserted unsuccessfully");
      </script> 
      <?php
     
    }
  
  }else{
    $password_error = "Password Not Matching";

  }
}


}


?>
<div class="text">
<h3>Create Account</h3>
<p>Get Started With Your Free Account</p>
<div>
<p class="bg-success text-white"><?php
if(isset($password_error))
{
  echo $password_error;
}


?></p>

<p class="bg-success-md text-white"><?php
if(isset($email_error))
{
  echo $email_error;
}


?></p>

</div>
<div class="forms">

<form action="" method="POST">
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input name="phone" type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input name="cpass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
 
  <input type="submit"name="submit"class="btn btn-primary"></input>
</form>

<div class="sign-up">
  
  <a href="./login.php"> Have an account?Log In</a>
  </div>

</div>


</div>


















    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>