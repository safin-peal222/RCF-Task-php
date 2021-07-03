
<?php

include 'header.php';
?>
<div id="main-content">
  <h2>All Record of selected Blood Group</h2>
<?php



$conn = mysqli_connect("localhost","root","","rcf_task");


$bg = $_POST['class'];
    $sql = "SELECT * FROM donorlist WHERE Blood_Group = '$bg'";



$conn = mysqli_connect("localhost","root","","rcf_task");



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


</tr>

<?php } ?>

</tbody>


</table>

<?php } ?>


</div>












































