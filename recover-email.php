<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail verification</title>
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

$email=mysqli_real_escape_string($con,$_POST['email']);



$emailquery="SELECT * FROM admin_login WHERE email = '$email'";
$query1=mysqli_query($con,$emailquery);
$email_count =mysqli_num_rows($query1);
if($email_count>0)
{
  $userData = mysqli_fetch_assoc($query1);
  $username = $userData['username'];
  $token = $userData['token'];
  
      $subject="Simple Email in PHP";
      $body="Hi $username,THis is test for the reset testing for website
      http://localhost/RCF-TASK-php/reset_pw.php?token=$token";
     
      
     
      if(mail($email,$subject,$body))
      {
        $_SESSION['msg']="check your mail to reset your account $email";
        header("location: ./login.php");
        echo "Email Success to $email";
      }else{
        echo "email send failed";
      }
    }else{
      echo " No email FOund";
    }


  }
  
    
      ?>
     
     
     
     
  

<div class="text">
<h3>Recover Your Account</h3>
<p>Please Fill Email Id Properly</p>
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
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  
  
  
 
  <input type="submit"name="submit" value="Send Mail"class="btn btn-primary"></input>
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