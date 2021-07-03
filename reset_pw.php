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
    if(isset($_GET['token']))
    {
        $token =$_GET['token'];

        
    

$newpass=mysqli_real_escape_string($con,$_POST['pass']);
$cpass=mysqli_real_escape_string($con,$_POST['cpass']);
//$password=password_hash($newpass,PASSWORD_BCRYPT);
//$cpassword=password_hash($cpass,PASSWORD_BCRYPT);





  if($newpass === $cpass){
    $updateQuery = "UPDATE admin_login SET password ='$newpass' WHERE token ='$token'";
    $query2 =mysqli_query($con,$updateQuery);
    
    if($query2)
    {
      $_SESSION['msg'] = "your password has been updated";
      header("location: ./login.php");
    
     
      
     
     
    
      
    }else
    {
        echo "your password is not updated";
      
     
    }
  
  }
    }
}

?>
<div class="text">
<h3>Reset Your Password</h3>
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
    <label for="exampleInputPassword1">Password</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input name="cpass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
 
  <input type="submit"name="submit" value="Update Account"class="btn btn-primary"></input>
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