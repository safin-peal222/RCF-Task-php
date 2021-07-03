





<?php include 'header.php';?>

<div id="main-content" data-aos="fade-left">

<h2 >Add New Record</h2>

<form action="./includes/savedata.php" class="post-form" method="post">

<div class="form-group">
<label>Name</label>
<input type="text" name="sname"/><br>
</div>
<div class="form-group">

<label>Blood Group</label>
<select name="class" required
>
<option value="" selected disabled>Blood Group</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="A-">A-</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="AB-">AB-</option>
</select>
</div>

<div class="form-group" data-aos="fade-left">

<label >Email</label>
<input type="text" name="email"/>
</div>

<div class="form-group" data-aos="zoom-in">

<label>Phone</label>
<input type="text" name="phone"/>
</div>
<div class="form-group">

<label>Address</label>
<input type="text" name="address"/>
</div>
<input class="submit" type="submit" value="Save"  />





     
            


</form>




  
</div>

</div>



