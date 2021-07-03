<?php


$search_value = $_POST["search"];

//$name = $_POST['sname'];
//$blood_group = $_POST['class'];
//$email = $_POST['email'];
//$phone = $_POST['phone'];
//$address = $_POST['address'];


$conn = mysqli_connect("localhost","root","","rcf_task");

$sql = "SELECT * FROM donorlist WHERE Address like '%{$search_value}%'";
$result=mysqli_query($conn,$sql) or die("query failed");
$output ="";
if(mysqli_num_rows($result)>0){
    $output = '<table>
    <tr>
    <th>Serial</th>
    <th>Name</th>
    </tr>';
    while($row = mysqli_fetch_assoc($result))
{



$output.="<tr>
<td>$row['serial']</td>



<td>$row['email']</td>

<td>
<a href='viewdetails.php?serial=<?php echo $row['serial']?>'>View Details</a>
</td>

</tr>";
}

$output.="</table>";

echo $output;
}else{
    echo "No result to show";
}



?>