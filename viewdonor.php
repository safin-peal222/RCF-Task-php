<?php

include 'header.php';
?>
<div id="main-content">
    <h2>All records</h2>

<?php


$conn = mysqli_connect("localhost","root","","rcf_task") or die("connection failed");

$sql = "SELECT email,serial FROM donorlist WHERE DEL is NULL";

$result = mysqli_query($conn,$sql) or die("query unsuccessfull");


if(mysqli_num_rows($result)>0)
{









?>


<table cellpadding="7px" data-aos="fade-down">

<thead>
<th>Serial</th>
<th>Name</th>
</thead>
<tbody>
<?php

while($row = mysqli_fetch_assoc($result))
{


?>
<tr>
<td><?php echo $row['serial']?></td>



<td><?php echo $row['email']?></td>

<td>
<a href='viewdetails.php?serial=<?php echo $row['serial']?>'>View Details</a>
</td>

</tr>
<!--search-data-->

<!---search-->
<?php } ?>


</tbody>

</table>

<?php  } ?>
<!--search bar-->

<table>
<tr>
<td id="table-data2">

</td>

</tr>

</table>

<div id="search-bar">
<div class="form-group mt-5">
<label for="">Search By Address </label>
<input type="text" name="search" id="search">
</div>

</div>




<!--search bar-->


</div>

<?php
include("./footer.php")

?>


