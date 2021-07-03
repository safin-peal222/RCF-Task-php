
    




<?php





$name = $_POST['sname'];
$blood_group = $_POST['class'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];


$conn = mysqli_connect("localhost","root","","rcf_task");


if(empty($name))
{
    echo"
        <script>
        alert ('please fill out name');
        window.location.href='../adddonor.php';
        
        
        </script>
        ";
   
}

else if(empty($email))
{
    echo"
        <script>
        alert ('please fill out email');
        window.location.href='../adddonor.php';
        
        
        </script>
        ";
}
else if(empty($phone))
{
    echo"
        <script>
        alert ('please fill out phone');
        window.location.href='../adddonor.php';
        
        
        </script>
        ";
}
else if(empty($address))
{
    echo"
        <script>
        alert ('please fill out address');
        window.location.href='../adddonor.php';
        
        
        </script>
        ";
}
else{

$sql = "INSERT INTO donorlist (Name,Blood_Group,email,phone,Address,count) VALUES ('{$name}','{$blood_group}','{$email}','{$phone}','{$address}',0)";


$result = mysqli_query($conn,$sql) or die("query unsuccessfull");


echo"
        <script>
        alert ('successfully registered');
        window.location.href='../adddonor.php';
        
        
        </script>
        ";



}


  
  
  
  


 


mysqli_close($conn);




?>

