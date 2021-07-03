<?php

include 'header.php';

?>
<div id="main-content">

<h2>All Deleted record</h2>



<?php

$conn = mysqli_connect("localhost","root","","rcf_task") or die("connection failed");



$sql = "SELECT serial,email,Name,Blood_Group,phone FROM donorlist WHERE DEL='1'";

$result = mysqli_query($conn,$sql) or die("query unsuccessfull");

if(mysqli_num_rows($result)>0)
{






?>
<table cellpadding="7px">


<thead>
<th>serial</th>
<th>email</th>
<th>Name</th>
<th>Blood Group</th>
<th>phone</th>

</thead>
<tbody>
<?php


while($row = mysqli_fetch_assoc($result))
{





?>
<tr>
<td><?php echo $row['serial']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['Name']?></td>
<td><?php echo $row['Blood_Group']?></td>
<td><?php echo $row['phone']?></td>
<td>
  <a href="restore.php?serial=<?php echo $row['serial']?>">Restore</a>
</td>


</tr>


<?php } ?>

</tbody>


   </table>




<?php } ?>



</div>