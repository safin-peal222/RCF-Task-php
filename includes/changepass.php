<?php

$conn = mysqli_connect("localhost","root","","rcf_task");



$sql = "SELECT * FROM admin_login";


$result = mysqli_query($conn,$sql) or die("query unsuccessfull");


$row = mysqli_fetch_assoc($result);


$oldpwd = $row['password'];
if(isset($_POST['save']))
{
    $current = $_POST['oldpwd'];
    $new = $_POST['npwd'];
    $confirm = $_POST['cpwd'];

    if($current == $oldpwd)
    {
        if($new == $confirm )
        {
            $update = "UPDATE admin_login set password = '$new'";
            $query = mysqli_query($conn,$update);
            if($query)
            {
                echo"
        <script>
        alert ('your password changed successfully');
        window.location.href='../admin.php';
        
        
        </script>
        ";
            }
           
        }
        else
        {
            echo"
        <script>
        alert ('your password do not match');
        window.location.href='changepass.php';
        
        
        </script>
        "; 
        }
    }
    else
    {
        echo "you entered wrong apssword";
    }
}







?>