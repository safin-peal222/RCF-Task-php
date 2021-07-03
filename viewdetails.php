<?php

include 'header.php';
?>
<div id="main-content">
     <?php
    
$conn = mysqli_connect("localhost","root","","rcf_task");
$serial = $_GET['serial'];

$sql = "SELECT * FROM donorlist where serial = {$serial}";
$result = mysqli_query($conn,$sql) or die("query unsuccessfull");
if(mysqli_num_rows($result)>0)
{
    while ($row = mysqli_fetch_assoc($result))
    {

    
?>
<h2>All records of <?php echo $row['Name'] ?></h2>

    <?php } ?>
    
<?php } ?>  

<?php
 
$serial = $_GET['serial'];

$conn = mysqli_connect("localhost","root","","rcf_task");


$sql = "SELECT * FROM donorlist where serial = {$serial}";
$result = mysqli_query($conn,$sql) or die("query unsuccessfull");


if(mysqli_num_rows($result)>0)

{










?>

<table cellpadding="7px">
<thead>
<th>Serial</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Blood Group</th>
<th>Address</th>



</thead>
<tbody>
<?php

while($row=mysqli_fetch_assoc($result))

{



?>


<tr>

<td><?php echo $row['serial']  ?></td>
<td><?php echo $row['Name']  ?></td>
<td><?php echo $row['email']  ?></td>
<td><?php echo $row['phone']  ?></td>
<td><?php echo $row['Blood_Group']  ?></td>
<td colspan="2"><?php echo $row['Address']  ?></td>
<td>
 <a href="./includes/donatenow.php?serial=<?php echo $row['serial']?>">Donate</a>
 
                    
</td>
<td>
<a href="./includes/delete.php?serial=<?php echo $row['serial']?>">Delete</a>

</td>

</tr>

<?php } ?>

</tbody>


</table>

<?php } ?>


</div>