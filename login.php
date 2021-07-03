<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    $email =$_POST['email'];
    $password=$_POST['password'];
    $emailquery1="SELECT * FROM admin_login WHERE email='$email' AND status='active'";
    $run1=mysqli_query($con,$emailquery1);
    if(!$run1)
    {
        die("query failed");
    }
    $emailcount=mysqli_num_rows($run1);
    if($emailcount ==  1 ){
        $emailpass=mysqli_fetch_assoc($run1);
        $dbpass=$emailpass['password'];
        $_SESSION['username']=$emailpass['username'];
        //$pass_decode=password_verify($password,$dbpass);
        
        if($password == $dbpass)
        {
            
            echo"login successfull";
            header("location: ./adddonor.php");
        }else{
            echo "login unsuccessfull";
        }
    }else{
        echo "there is no email";
    }
}



?>


<div class="text">
<h3>Log in</h3>
<p>Get Started With Your Free Account</p>
<div class="forms">
<div>

<p class="bg-success text-white px-4"><?php echo $_SESSION['msg'];?></p>
</div>

<form action="" method="POST">
<div class="form-group">
    <label for="exampleInputEmail1">EMAIL</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">PASSWORD</label>
    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
    
  </div>


  <input type="submit"name="submit"class="btn btn-primary"></input>
</form>
<div class="forgot-pw">
<a href="./recover-email.php">Forgot Password?</a>
</div>

  <div class="sign-up">
  
  
  <a href="./admin.php">Not Have an account?Sign Up</a>
  </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>